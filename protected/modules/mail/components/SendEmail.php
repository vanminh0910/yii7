<?php

/**
 * send mail component, can send with template by template key.
 * load config from site setting
 * @author phuongtran
 */
class SendEmail {

    function __construct() {

    }

    /**
     * load config from database
     * @return type
     */
    private static function _getMailer() {
        require_once Yii::app()->modulePath . '\mail\components\mailer\phpmailer\class-phpmailer.php';
        require_once Yii::app()->modulePath . '\mail\components\mailer\phpmailer\class-smtp.php';
        $settings = Yii::app()->settings;
        $category = 'email';

        $mailer = new PHPMailer();
        $mailer->IsSMTP();

//        $mailer->SMTPDebug = true;
//        $mailer->SMTPSecure = 'none';
        $mailer->SMTPAuth = true;
        $mailer->SMTPSecure = "ssl";

        $mailer->Host = $settings->get($category, 'smtp_server');
        $mailer->Port = '465';
        $mailer->Username = $settings->get($category, 'smtp_username');
        $mailer->Password = $settings->get($category, 'smtp_password');

        $mailer->FromName = $settings->get($category, 'admin_email');
        $mailer->From = $settings->get($category, 'admin_email');
        $mailer->CharSet = 'UTF-8';
        return $mailer;
    }

    public static function sendMail($to, $subject, $message) {
        $mailer = self::_getMailer();
        $mailer->AddAddress($to);
        $mailer->Subject = $subject;
        $mailer->MsgHTML($message);
        return $mailer->Send();
    }

    /**
     * send email with temlate, get template by key from template Model
     * @param array $data include email to, subject, cc, bbc, and more file want replace
     * @param type $templateKey
     * @param type $langKey
     * @return boolean
     */
    public static function sendEmailByTemplate($data, $templateKey, $langKey = null) {
        $mailer = self::_getMailer();
        if (isset($data['to'])) {
            $mailer->AddAddress($data['to']);
            if (isset($data['cc'])) {
                $mailer->AddCC($data['cc']);
            }
            if (isset($data['bcc'])) {
                $mailer->AddBCC($data['bcc']);
            }
            $templateData = self::getContentByTemplate($data, $templateKey, $langKey);
            if (isset($templateData['attach_file']) && strlen($templateData['attach_file']) > 0) {
                $dir = dirname(Yii::app()->getBasePath()) . '/files/mail/' . $templateData['email_temp_id'] . '/' . $templateData['lang_code'];
                $files = scandir($dir);
                foreach ($files as $i => $file) {
                    if (file_exists($dir . '/' . $file) && $i > 1) {
//                        var_dump($dir . '/' . $file);
                        $mailer->AddAttachment($dir . '/' . $file);
                    }
                }
            }


            $data['content'] = isset($templateData['content']) ? $templateData['content'] : 'No Content.';
            $data['subject'] = isset($templateData['subject']) ? $templateData['subject'] : 'No Subject';
            $mailer->Subject = $data['subject'];
            $mailer->MsgHTML($data['content']);
            return $mailer->Send();
        } else {
            return FALSE;
        }
    }

    /**
     * get content from template, and replace some attribute
     * @param array $data
     * @param string $templateKey template key
     * @param string $langKey
     * @return array $ret
     */
    public static function getContentByTemplate($data, $templateKey, $langKey = null) {
        $langKey = Yii::app()->language;
        $ret = EmailTemplate::model()->getTemplageByKey($templateKey, $langKey);
        if (!$ret) {
            $ret = EmailTemplate::model()->getTemplageByKey($templateKey, "en");
        }
        foreach ($data as $key => $value) {
            if (isset($ret['content'])) {
                $ret['content'] = str_replace('{{' . $key . '}}', $value, $ret['content']);
            }
        }
        return $ret;
    }

}

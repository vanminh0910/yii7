<?php

class MailModule extends CWebModule {

    public function init() {
        $this->setImport(array(
            'mail.models.*',
            'mail.components.*',
        ));
    }

    public function beforeControllerAction($controller, $action) {
        if (parent::beforeControllerAction($controller, $action)) {
            return true;
        } else
            return false;
    }

    public static function t($str = '') {
        return Yii::t("MailModule.mail", $str);
    }

}

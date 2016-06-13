<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class RegisterController extends FontendController {

    public $defaultAction = 'register';

    public function actionRegister() {

        $newUser = new User;

        if (isset($_POST['User'])) {

            $newUser->attributes = $_POST['User'];

            if ($newUser->validate()) {


                $temp = $newUser->password;
                $newUser->password = AccountsModule::encrypting($newUser->password);
                $newUser->activation_key = AccountsModule::encrypting(microtime() . $newUser->password);
                $newUser->setLastVisit(time());
                $newUser->status = User::STATUS_NOACTIVE;

                if ($newUser->save(false)) {

                    if (AccountsModule::$sendActivationMail) {
                        $activation_url = Yii::app()->getBaseUrl(true) . '/accounts/activation?activation_key=' . $newUser->activation_key . '&email=' . $newUser->email;

                        $data = array('to' => $newUser->email, 'url' => $activation_url, 'username' => $newUser->username);

                        $isSent = SendEmail::sendEmailByTemplate($data, 'activate');

                        if (Yii::app()->request->isAjaxRequest) {
                            $this->layout = false;
                            header('Content-type: application/json');
                            $repArray = $newUser->getErrors();
                            $repArray['mailActivation'] = 1;
                            echo CJavaScript::jsonEncode($repArray);
                            Yii::app()->end();
                        }

                        Yii::app()->user->setFlash('Message', $activation_url);
                        $this->refresh();
                    } else {

                        $newUser->status = User::STATUS_ACTIVE;
                        $newUser->save(false);

                        $identity = new UserIdentity($newUser->username, $temp);
                        $identity->authenticate();
                        Yii::app()->user->login($identity, 0);

                        if (Yii::app()->request->isAjaxRequest) {
                            $this->layout = false;
                            header('Content-type: application/json');
                            $repArray = $newUser->getErrors();
                            $repArray['mailActivation'] = 0;
                            echo CJavaScript::jsonEncode($repArray);
                            Yii::app()->end();
                        }
                        Yii::app()->user->setFlash('Message', AccountsModule::t("Register successfully. You are login now"));
                        $this->refresh();
                    }
                }
            } else {
                if (Yii::app()->request->isAjaxRequest) {
                    $this->layout = false;
                    header('Content-type: application/json');
                    echo CJavaScript::jsonEncode($newUser->getErrors());
                    Yii::app()->end();
                }
            }
        }

        $this->render('/default/register', array('model' => $newUser));
    }

}

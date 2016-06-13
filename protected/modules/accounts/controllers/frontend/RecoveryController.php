<?php

class RecoveryController extends FontendController {

    public $defaultAction = 'recovery';

    public function allowAction() {
        return array('recovery');
    }

    /**
     * Recovery password
     */
    public function actionRecovery() {
        if (!Yii::app()->user->isGuest) {
            $this->redirect(Yii::app()->getBaseUrl() . '/shop/products');
            return;
        }
      
        $form = new UserRecoveryForm;
        $email = ((isset($_GET['email'])) ? $_GET['email'] : '');
        $activkey = ((isset($_GET['activation_key'])) ? $_GET['activation_key'] : '');
        if ($email && $activkey) {
            $form2 = new UserChangePassword;
            $find = User::model()->notsafe()->findByAttributes(array('email' => $email));
            if (isset($find) && $find->activation_key == $activkey) {
                if (isset($_POST['UserChangePassword'])) {
                    $form2->attributes = $_POST['UserChangePassword'];
                    if ($form2->validate()) {
                        $find->password = AccountsModule::encrypting($form2->password);
                        $find->activation_key = AccountsModule::encrypting(microtime() . time());
                        $find->update();
                        Yii::app()->user->setFlash('changepassword', AccountsModule::t("New password is saved."));
                        $this->render('/default/login', array('model' => new UserLogin()));
                        return;
                    }
                }
            } else {
                Yii::app()->user->setFlash('linkfail', AccountsModule::t("Incorrect recovery link."));
                $this->render('/default/login', array('model' => new UserLogin()));
                return;
            }
            $this->render('/default/changepassword', array('model' => $form2));
        } else {
            if (isset($_POST['UserRecoveryForm'])) {
                $form->attributes = $_POST['UserRecoveryForm'];
                if ($form->validate()) {
                    $user = User::model()->notsafe()->findbyPk($form->user_id);

                    $url = Yii::app()->getBaseUrl(true) . '/accounts/recovery?activation_key=' . $user->activation_key . '&email=' . $user->email;
                    $data = array('to' => $user->email,
                        'url' => $url);
                    SendEmail::sendEmailByTemplate($data, 'recovery');
                    Yii::app()->user->setFlash('recoveryMessage', AccountsModule::t("Please check your email. An instructions was sent to your email address."));
                }
            }
            $this->render('/default/recovery', array('model' => $form));
        }
    }

}

<?php

class ActivationController extends FontendController {

    public $defaultAction = 'activation';

    /**
     * Activation user account
     */
    public function actionActivation() {
        $email = ((isset($_GET['email'])) ? $_GET['email'] : '');
        $activkey = ((isset($_GET['activation_key'])) ? $_GET['activation_key'] : '');
        if ($email && $activkey) {
            $find = User::model()->notsafe()->findByAttributes(array('email' => $email));
            if (isset($find) && $find->status) {
                $this->render('/default/message', array('title' => AccountsModule::t("User activation"), 'content' => AccountsModule::t("You account is active.")));
            } elseif (isset($find->activation_key) && ($find->activation_key == $activkey)) {
                $find->activation_key = AccountsModule::encrypting(microtime());
                $find->status = User::STATUS_ACTIVE;
                if ($find->save(false)) {
                    $this->render('/default/message', array('title' => AccountsModule::t("User activation"), 'content' => AccountsModule::t("You account is activated.")));
                } else {
                    $this->render('/default/message', array('title' => AccountsModule::t("User activation"), 'content' => AccountsModule::t("Can not activate your account now.")));
                }
            } else {
                $this->render('/default/message', array('title' => AccountsModule::t("User activation"), 'content' => AccountsModule::t("Incorrect activation URL.")));
            }
        } else {
            $this->render('/default/message', array('title' => AccountsModule::t("User activation"), 'content' => AccountsModule::t("Incorrect activation URLaaaaa.")));
        }
    }

}

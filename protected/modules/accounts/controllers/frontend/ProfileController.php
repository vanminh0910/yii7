<?php

class ProfileController extends FontendController {

    public $defaultAction = 'profile';

    /**
     * Logout the current user and redirect to returnLogoutUrl.
     */
    public function actionProfile() {
        if (Yii::app()->user->isGuest) {
            $this->redirect("/Yii7/accounts/login");
        } else {
            $data = User::model()->findByPk(Yii::app()->user->id);
            $this->render('/default/profile', array('data' => $data));
        }
    }

}

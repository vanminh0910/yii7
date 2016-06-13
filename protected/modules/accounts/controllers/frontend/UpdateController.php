<?php

class UpdateController extends FontendController {

    public $defaultAction = 'update';

    /**
     * Logout the current user and redirect to returnLogoutUrl.
     */
    public function actionUpdate() {
        $model = User::model()->findByPk(Yii::app()->user->id);
        unset($model->password);
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->validate()) {
                if ($model->password == null || strlen($model->password) == 0) {
                    $model->password = User::model()->findByPk(Yii::app()->user->id)->password;
                } else {
                    $model->password = AccountsModule::encrypting($model->password);
                }

//                var_dump($model);
//                return;
                if ($model->update(false)) {
                    $this->redirect(Yii::app()->controller->module->profileUrl);
                    return;
                }
            }
        }

        $this->render('/default/update', array('model' => $model));
    }

}

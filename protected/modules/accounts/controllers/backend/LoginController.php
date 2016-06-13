<?php

class LoginController extends CController {

    public $defaultAction = 'login';
    public $layout = '//layouts/column1';

    /**
     * Displays the login page
     */
    public function actionLogin() {
        if (Yii::app()->user->isGuest) {
            $model = new UserLogin;
            // collect user input data
            if (isset($_POST['UserLogin'])) {
                $model->attributes = $_POST['UserLogin'];
                // validate user input and redirect to previous page if valid
                if ($model->validate()) {
                    $this->setLastVisitTime();
                    if (Yii::app()->user->returnUrl == Yii::app()->homeUrl || strpos($_SERVER['REQUEST_URI'], 'login') > 0) {
                        $this->redirect(Yii::app()->baseUrl . '/backend/site/index');
                    } else {
                        $this->redirect(Yii::app()->user->returnUrl);
                    }
                }
            }
            // display the login form
            $this->layout = false;
            $this->render('/user/login', array('model' => $model));
        } else {
            $this->redirect(Yii::app()->controller->module->returnUrl);
        }
    }

    private function setLastVisitTime() {
        $user = User::model()->notsafe()->findByPk(Yii::app()->user->id);
        $user->setLastVisit(time());
        $user->save();
    }

}

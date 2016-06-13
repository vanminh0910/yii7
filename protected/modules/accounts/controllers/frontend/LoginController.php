<?php

class LoginController extends FontendController {

    public $defaultAction = 'login';

    /**
     * Displays the login page
     */
    public function actionLogin() {
//        if (Yii::app()->user->isGuest) {
        $model = new UserLogin;
        // collect user input data
        if (isset($_POST['UserLogin'])) {
            $model->attributes = $_POST['UserLogin'];
            // validate user input and redirect to previous page if valid
            if ($model->validate()) {
                $this->setLastVisitTime();
                if (Yii::app()->request->isAjaxRequest) {
                    $this->layout = false;
                    header('Content-type: application/json');
                    echo CJavaScript::jsonEncode($model->getErrors());
                    Yii::app()->end();
                }
                if (Yii::app()->user->returnUrl == '/index.php')
                    $this->redirect(Yii::app()->controller->module->returnUrl);
                else
                    $this->redirect(Yii::app()->user->returnUrl);
            }else {
                if (Yii::app()->request->isAjaxRequest) {
                    Yii::trace(CVarDumper::dumpAsString($model->getErrors()));
                    $this->layout = false;
                    header('Content-type: application/json');
                    echo CJavaScript::jsonEncode($model->getErrors());
                    Yii::app()->end();
                }
            }
        }
        // display the login form
        $this->render('/default/login', array('model' => $model));
//        } else
//            $this->redirect(Yii::app()->controller->module->returnUrl);
    }

    private function setLastVisitTime() {
        $user = User::model()->notsafe()->findByPk(Yii::app()->user->id);
        $user->setLastVisit(time());
        $user->save();
    }

}

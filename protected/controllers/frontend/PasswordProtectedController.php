<?php

class PasswordProtectedController extends FontendController {
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

    public function actionIndex() {
        if (isset($_POST['password'])) {
            //read protected password setting
            $settings = Yii::app()->settings;
            $password = $settings->get("firstLayerProtection", "password");
            $id = session_id();
            $input_password = $_POST['password'];
            if ($input_password == $password) {
                setcookie("in", md5($id), time() + 3600 * 24, "/");
                $this->redirect($this->createAbsoluteUrl('/'));
            } else {
                $this->redirect($this->createAbsoluteUrl('/passwordprotected'));
            }
        }
        $this->layout = false;
        $this->render('index');
    }

}

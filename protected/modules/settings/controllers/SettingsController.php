<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class SettingsController extends BackendController {

    public $defaultAction = 'index';

    public function actionIndex() {
        $settings = Yii::app()->settings;
        $model = new SettingsForm;
        if (isset($_POST['SettingsForm'])) {
            $model->setAttributes($_POST['SettingsForm']);
            $settings->deleteCache();
            foreach ($model->attributes as $category => $values) {
                $settings->set($category, $values);
            }
        }
        foreach ($model->attributes as $category => $values) {
            $cat = $model->$category;
            foreach ($values as $key => $val) {
                $cat[$key] = $settings->get($category, $key);
            }
            $model->$category = $cat;
        }
        $this->render('/setting', array('model' => $model));
    }

}

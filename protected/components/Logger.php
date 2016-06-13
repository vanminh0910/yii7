<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Logger extends CApplicationComponent {

    public function log($message, $level = CLogger::LEVEL_INFO, $category = 'application') {


        Yii::log($message, $level, $category);
    }

}

<?php

$environment = require_once(dirname(__FILE__).'/environment.php');

$config = dirname(__FILE__) . "/protected/config/api/{$environment}.php";
$yii=dirname(__FILE__).'/vendor/yiisoft/yii/framework/yii.php';

require_once($yii);
Yii::createWebApplication($config)->runEnd('api');


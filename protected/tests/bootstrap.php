<?php

$environment = require_once(dirname(__FILE__) . '/../../environment.php');

// change the following paths if necessary
$yiit = dirname(__FILE__) . '/../../vendor/yiisoft/yii/framework/yiit.php';
$config = dirname(__FILE__) . "/../config/test/{$environment}.php";

require_once($yiit);
require_once(dirname(__FILE__) . '/WebTestCase.php');
require_once(dirname(__FILE__) . '/DBTestCase.php');

Yii::createWebApplication($config);

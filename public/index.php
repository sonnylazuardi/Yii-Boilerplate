<?php

defined('SERVER_ENV') || define('SERVER_ENV', 'development');

$yii = __DIR__.'/../protected/library/yii/yii.php';
$config = __DIR__.'/../protected/config/' . SERVER_ENV . '.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once $yii;
Yii::createWebApplication($config)->run();


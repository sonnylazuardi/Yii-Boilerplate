<?php

defined('SERVER_ENV') || define('SERVER_ENV', 'development');

$yiic   = __DIR__ . '/library/yii/yiic.php';
$config = __DIR__ . '/config/' . SERVER_ENV . '.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);

// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yiic);

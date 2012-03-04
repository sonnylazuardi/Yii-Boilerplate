<?php

return array(
    // Path aliases
    // E.g.
    // 'images' => __DIR__ . '/../../pubilc/images'
    'aliases' => array(),

    // App base path
    'basePath' => __DIR__ . DIRECTORY_SEPARATOR . '..',

    // App name
    'name' => 'Yii Boilerplate',

    // Default app language
    'language' => 'en',

    // Things to load eager
    'preload' => array('log'),

    // Set include pathes for autloader (where to look. Separate folders by .)
    // Yii also has several aliases (see above):
    // application = protected folder
    // ext  = extensions folder
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),

    // Modules to load. Out them into the protected/modules folder
    'modules' => array(
        'contact' => array(
            'to' => 'you@example.org',
        ),
        'gii' => array(
            'class'       => 'system.gii.GiiModule',
            'password'    => 'abc',
            //'ipFilters' => array('127.0.0.1','::1'),
            'ipFilters'   => array('*'),
        ),
    ),

    // Yii components. Ease to use everywhere like this
    // Yii::app()->COMPONENT_NAME e.g. Yii::app()->db
    'components' => array(
        'db' => array(
            'connectionString'      => 'sqlite:' . __DIR__ . '/../data/yii-boilerplate.sqlite',
            'schemaCachingDuration' => 120,
            'enableProfiling'       => true,
            'enableParamLogging'    => true,
        ),

        'cache' => array(
            //'class' => 'system.caching.CApcCache',
            'class' => 'system.caching.CDummyCache',
        ),

        'clientScript' => array(
            'coreScriptPosition' => CClientScript::POS_END,
        ),

        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
                //array(
                //'class' => 'CWebLogRoute',
                //),
            ),
        ),

        // Route management
        'urlManager' => array(
            'urlFormat' => 'path',
            //'showScriptName' => false,
            'rules' => array(
                '' => 'index/index',
            ),
        ),

        'user' => array(
            'allowAutoLogin' => true,
            'loginUrl' => array('user/default/login'),
            'autoRenewCookie' => true,
        ),
    ),

    // Global accessible parameters
    // Yii::app()->params['MY_PARAMETER'] e.g. Yii::app()->params['admin']
    'params' => array(
        'admin'         => 'Florian Fackler',
        'infobarLevels' => array(
            'error', 'success', 'info', 'warn'
        ),
    ),
);


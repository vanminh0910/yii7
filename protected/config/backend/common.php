<?php

return array(
    'name' => 'YiiOpenCMS - Backend',
    'theme' => 'backend',
    // autoloading model and component classes
    'import' => array(
        'application.models.backend.*',
        'application.components.backend.*',
        'application.modules.user.models.*',
    ),

    // application components
    'components' => array(
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'class' => 'UrlManager',
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => require(dirname(__FILE__) . '/routes.php'),
//            'page/<name>-<id:\d+>.html'=>'cms/node/page', // clean URLs for pages
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
    ),
    'params' => require(dirname(__FILE__) . '/params.php'),
);

<?php

/**
 * common configuration with different tier
 */
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '../..',
    'import' => array(
        'application.components.*',
        'application.helpers.*',
        'application.modules.rights.*',
        'application.modules.rights.components.*',
        'application.modules.test.*',
        'application.modules.test.models.*',
        'application.modules.accounts.*',
        'application.modules.accounts.models.*',
        'application.modules.mail.components.*',
        'application.modules.mail.models.*',
        'application.modules.settings.*',
        'application.extensions.CmsSetting.*',
        'application.modules.shop.models.*',
    ),
    'preload' => array('log'),
    'aliases' => array(
        'bootstrap' => ('ext.bootstrap'),
        'email' => 'application.modules.email',
    ),
    'modules' => array(
        'test',
        'accounts' => array(
            'hash' => 'md5'
        ),
        'cms' => array(
            'class' => 'application.modules.cms.CmsModule',
        ),
        'rights' => array(
            'roleAccess' => 'Administrator',
            'usernameAccess' => 'admin',
            'install' => false,
        ),
        'mail',
        'language',
        'settings',
        'shop' => array('debug' => 'true'),
    ),
    'components' => array(
//        'messages' => array(
//            'class' => 'application.components.PhpMessageSource',
//        ),
        'bootstrap' => array(
            'class' => 'bootstrap.components.Bootstrap',
        ),
        'user' => array(
            'class' => 'RWebUser',
// enable cookie-based authentication
            'allowAutoLogin' => true,
            'loginUrl' => array('/accounts/login'),
        //'debug'=>true,
        ),
        'logger' => array('class'=>'Logger'),
        'authManager' => array(
            'class' => 'RDbAuthManager',
            'connectionID' => 'db',
            'defaultRoles' => array('Authenticated', 'Guest'),
        ),
        'settings' => array(
            'class' => 'application.extensions.CmsSettings.CmsSettings',
            'cacheComponentId' => 'cache',
            'cacheId' => 'global_website_settings',
            'cacheTime' => 10,
            'tableName' => 'settings',
            'dbComponentId' => 'db',
            'createTable' => true,
            'dbEngine' => 'InnoDB',),
        'cms' => array(
            'class' => 'cms.components.Cms',
        ),
        'curl' => array(
            'class' => 'ext.curl.Curl',
        ),
        'image' => array(
            'class' => 'ext.image.components.ImageManager',
            'versions' => array(
                'span1' => array('width' => 60, 'height' => 45, 'format' => 'jpg', 'resizeMethod' => 'adaptiveResize'),
                'span2' => array('width' => 140, 'height' => 105, 'format' => 'jpg', 'resizeMethod' => 'adaptiveResize'),
                'span3' => array('width' => 220, 'height' => 165, 'format' => 'jpg', 'resizeMethod' => 'adaptiveResize'),
                'span4' => array('width' => 300, 'height' => 225, 'format' => 'jpg', 'resizeMethod' => 'adaptiveResize'),
                'span5' => array('width' => 380, 'height' => 285, 'format' => 'jpg', 'resizeMethod' => 'adaptiveResize'),
                'span6' => array('width' => 460, 'height' => 345, 'format' => 'jpg', 'resizeMethod' => 'adaptiveResize'),
                'span7' => array('width' => 540, 'height' => 405, 'format' => 'jpg', 'resizeMethod' => 'adaptiveResize'),
                'span8' => array('width' => 620, 'height' => 465, 'format' => 'jpg', 'resizeMethod' => 'adaptiveResize'),
                'span9' => array('width' => 700, 'height' => 525, 'format' => 'jpg', 'resizeMethod' => 'adaptiveResize'),
                'span10' => array('width' => 780, 'height' => 585, 'format' => 'jpg', 'resizeMethod' => 'adaptiveResize'),
                'span11' => array('width' => 860, 'height' => 645, 'format' => 'jpg', 'resizeMethod' => 'adaptiveResize'),
                'span12' => array('width' => 940, 'height' => 705, 'format' => 'jpg', 'resizeMethod' => 'adaptiveResize'),
            ),
        ),
        'request' => array(
            'enableCookieValidation' => true,
        //'enableCsrfValidation'=>true,
        ),
        'format' => array(
            'datetimeFormat' => "d M, Y h:m:s a",
        ),
    ),
    'params' => require(dirname(__FILE__) . '/params.php'),
    'behaviors' => array(
// separate frontend and backend
        'runEnd' => array(
            'class' => 'application.components.WebApplicationEndBehavior',
        ),
    ),
);

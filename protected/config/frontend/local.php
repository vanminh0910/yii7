<?php

return CMap::mergeArray(
    CMap::mergeArray(require(dirname(__FILE__) . '/common.php'), require(dirname(__FILE__) . '/../common/local.php')), array(
        'import' => array(
            'ext.debugtoolbar.XWebDebugRouter',
        ),
        'components' => array(
            'log' => array(
		    'class' => 'CLogRouter',
		    'routes' => array(
		        array(
		            'class' => 'CFileLogRoute',
		            'levels' => 'error, warning',
		        ),
		        // uncomment the following to show log messages on web pages
		        array(
		            'class' => 'CWebLogRoute',
		            'enabled' => YII_DEBUG,
		            'levels' => 'error, warning, trace, notice',
		            'categories' => 'application',
		            'showInFireBug' => false,
		        ),
                        array(
                            'class' => 'CWebLogRoute',
                            'enabled' => YII_DEBUG,
                            'levels' => 'error, warning, trace, notice',
                            'categories' => 'application',
                            'showInFireBug' => false,
                        ),
		    ),
		),
            'cache' => array(
                'class'=>'system.caching.CFileCache',
            ),
        ),
        'params'=> array(

        ),
    )
);

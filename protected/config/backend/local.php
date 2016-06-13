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
                            'levels' => 'error,warning',
                        ),
                        array(
                            'class' => 'CWebLogRoute',
                            'enabled' => YII_DEBUG,
                            'levels' => 'error, warning, trace, notice',
                            'categories' => 'application',
                            'showInFireBug' => false,
                        ),
                    // debug toolbar configuration
                    // array(
                    //     'class' => 'XWebDebugRouter',
                    //     'config' => 'alignLeft, opaque, runInDebug, fixedPos, collapsed, yamlStyle',
                    //     'levels' => 'error, warning, trace, profile, info',
                    //     'allowedIPs' => array('127.0.0.1', $_SERVER['REMOTE_ADDR']),
                    // ),
                    ),
                ),
                'cache' => array(
                    'class' => 'system.caching.CFileCache',
                ),
            ),
            'params' => array(),
                )
);

<?php

return CMap::mergeArray(
    require(dirname(__FILE__) . '/common.php'), array(
        'components' => array(
            'db' => require(dirname(__FILE__) . '/../dbconnect.local.php'),
            'log' => array(
                'class' => 'CLogRouter',
                'routes' => array(
                    array(
                        'class' => 'CFileLogRoute',
                        'levels' => 'error, warning, trace, info',
                    ),
                ),
            ),
        ),
    )
);
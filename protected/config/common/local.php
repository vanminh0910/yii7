<?php
/**
 * local configuration file with different tier
 */
return CMap::mergeArray(
    require(dirname(__FILE__) . '/common.php'), array(
        'components' => array(
            'db' => require(dirname(__FILE__) . '/../dbconnect.local.php'),
        ),
        'modules' => array(
            // uncomment the following to enable the Gii tool
            'gii' => array('class' => 'system.gii.GiiModule',
                'password' => '123456',
                'generatorPaths' => array(
                    'bootstrap.gii'
                ),
            ),
        ),
        'params' => array(),
    )
);
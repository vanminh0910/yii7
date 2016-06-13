<?php

return array(
    'sourcePath' => 'path/to/your/application/', // eg. '/projects/myproject/protected'
    'messagePath' => 'path/to/your/application/messages', // '/projects/myproject/protected/messages'
    'languages' => array('en', 'fr', 'zh_cn', 'ja'), // according to your translation needs
    'fileTypes' => array('php'),
    'overwrite' => false,
    'removeOld' => true,
    'sort' => true,
    'exclude' => array(
        '.svn',
        '.gitignore',
        'yiilite.php',
        'yiit.php',
        '/i18n/data',
        '/messages',
        '/vendors',
        '/web/js',
        'UserModule.php', // if you are using yii-user ...
    ),
);



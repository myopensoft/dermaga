<?php
Yii::setAlias('@approot', realpath(dirname(__FILE__).'/../../'));

return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language'=>'en',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@approot/messages',
                ],
                'yii*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@approot/messages',
                ],
            ],
        ],
        'urlManager' => [
    		    'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['en', 'my'],
            //'enablePrettyUrl' => true,
            //'showScriptName' => false,
            //'rules' => [
            //],
        ],
    ],
];

<?php
// config/web.php

use yii\web\UrlRule;

return [
    'id' => 'bluetooth-app',
    'basePath' => dirname(__DIR__),
    // Other configurations...

    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                // Other URL rules...
                'bluetooth/connect' => 'bluetooth/connect', // Map the 'bluetooth/connect' URL to the 'bluetooth/connect' action
            ],
        ],
    ],
];

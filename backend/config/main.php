<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'language' => 'ru-RU',
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'admin' => [
            'class' => 'backend\modules\admin\Module',
        ],
        'datecontrol' => [
            'class' => 'kartik\datecontrol\Module',

            // format settings for displaying each date attribute
            'displaySettings' => [
                'date' => 'dd.MM.yyyy',
                'time' => 'hh:mm:ss a',
                'datetime' => 'dd-MM-yyyy hh:mm:ss a',
            ],

            // format settings for saving each date attribute
            'saveSettings' => [
                'date' => 'dd.MM.yyyy',
                'time' => 'php:H:i:s',
                'datetime' => 'dd/MM/yyyy HH:mm',
            ],

            // automatically use kartik\widgets for each of the above formats
            'autoWidget' => true,
        ],
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'params' => $params,
];

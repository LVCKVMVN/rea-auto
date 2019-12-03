<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    //'language'=>'ru-RU',
    //'sourceLanguage' => 'en-US',
    'name'=> 'Федеральное государственное бюджетное образовательное учреждение высшего образования «Российский
    экономический университет имени Г.В. Плеханова»',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'igorgl3bov@gmail.com',
                'password' => '23051020i',
                'port' => '587',
                'encryption' => 'tls',
            ],
        ],
        'i18n' => [ // компонент мультизязычности
            'translations' => [
                '*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    // 'basePath' => '@common/messages', // путь к папке с переводами
                    // 'fileMap' => [
                    //     'app' => 'app.php',
                    // ],
              ],
            ],
            ],
        'request' => [
            'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['ru', 'en'],
            'enableDefaultLanguageUrlCode' => true,
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'index' => 'site/index',
                //'<action:\w:[a-zA-Z0-9-]+>' => '<site/action>',
                '<action:\w+>' => 'site/<action>',
               // 'page/<view:[a-zA-Z0-9-]+>' => 'site/page',

            ],
        ],
    ],
    'params' => $params,
];

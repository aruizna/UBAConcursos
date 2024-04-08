<?php

use app\commands\HelloController;

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@tests' => '@app/tests',
    ],
    'modules' => [
        'user' =>  Da\User\Module::class,
    ],    
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            // configuración adicional si es necesario
        ],          
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'mailer' => [
            'class' => \yii\swiftmailer\Mailer::class,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => $_ENV['MAIL_HOST'] ?? 'smtp.office365.com',
                'port' => $_ENV["MAIL_PORT"] ?? 587,
                'username' => $_ENV['MAIL_USER']??'a',
                'password' => $_ENV['MAIL_PASSWORD']??'a',
                'encryption' => $_ENV["MAIL_ENCRYPTION"] ?? 'tls', // Security: TLS
                'authMode' => $_ENV["MAIL_AUTHMODE"] ?? 'login', // Authentication type: LOGIN
            ],
            // 'useFileTransport' to false and configure transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
        ],  
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
    ],
    'params' => $params,
    'controllerMap' => [
        'test' => [ // Fixture generation command line.
            'class' => HelloController::class,
        ],
    ],
    
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
    // configuration adjustments for 'dev' environment
    // requires version `2.1.21` of yii2-debug module
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;

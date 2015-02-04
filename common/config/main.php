<?php

$config = [
    'vendorPath' => __DIR__ . '/../../vendor',
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => getenv('DB_DSN'),
            'username' => getenv('DB_USERNAME'),
            'password' => getenv('DB_PASSWORD'),
            'charset' => 'utf8',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];

if (YII_ENV_DEV) {
    $config['components']['mailer']['userFileTransport'] = true;
}

if (YII_ENV_PROD) {
    $config['components']['db']['enableSchemaCache'] = true;
}

return $config;

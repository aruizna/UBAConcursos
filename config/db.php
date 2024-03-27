<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' =>  'mysql:host=' . ($_ENV['MYSQL_HOST'] ?? "db") . ':' . ($_ENV['MYSQL_PORT'] ?? 3306) . ';dbname=' . ($_ENV['MYSQL_DATABASE'] ?? "oncursos"),
    'username' => $_ENV['MYSQL_USER'],
    'password' => $_ENV['MYSQL_PASSWORD'],
    'charset' => 'utf8',
];

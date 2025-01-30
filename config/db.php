<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' =>  'mysql:host=' . ($_ENV['MYSQL_HOST'] ?? "localhost") . ':' . ($_ENV['MYSQL_PORT'] ?? 3306) . ';dbname=' . ($_ENV['MYSQL_DATABASE'] ?? "concursos"),
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];

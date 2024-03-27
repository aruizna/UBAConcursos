<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' =>  'mysql:host=' . ($_ENV['MYSQL_HOST'] ?? "localhost") . ':' . ($_ENV['MYSQL_PORT'] ?? 3306) . ';dbname=' . ($_ENV['MYSQL_DATABASE'] ?? "UBA_Concursos"),
    'username' => $_ENV['MYSQL_USER'] ?? 'admin',
    'password' => $_ENV['MYSQL_PASSWORD'] ?? 'adminadmin',
    'charset' => 'utf8',
];

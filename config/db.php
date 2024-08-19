<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' =>  'mysql:host=' . ($_ENV['MYSQL_HOST'] ?? "localhost") . ':' . ($_ENV['MYSQL_PORT'] ?? 3306) . ';dbname=' . ($_ENV['MYSQL_DATABASE'] ?? "concursos"),
    'username' => $_ENV['MYSQL_USER']?? "root",
    'password' => $_ENV['MYSQL_PASSWORD']?? "",
    'charset' => 'utf8',
];

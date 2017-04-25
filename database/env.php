<?php

use Medoo\Medoo;

$DB = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'api',
    'server' => 'localhost',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8'
]);

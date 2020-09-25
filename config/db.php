<?php

$url = parse_url(getenv("mysql://bb9b4ce32852d9:6fcfc4f3@eu-cdbr-west-03.cleardb.net/heroku_8b4745719d70df9?reconnect=true"));

$server   = 'eu-cdbr-west-03.cleardb.net:3306';
$username = 'bb9b4ce32852d9';
$password = '6fcfc4f3';
$db       = 'heroku_8b4745719d70df9';

return [
    'class'    => 'yii\db\Connection',
    'dsn'      => 'mysql:host=' . $server . ';dbname=' . $db,
    'username' => $username,
    'password' => $password,
    'charset'  => 'utf8',
];

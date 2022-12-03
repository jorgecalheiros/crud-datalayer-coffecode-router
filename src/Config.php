<?php

/**
 * ROOT URL
 */
define("ROOT", "http://localhost:8001/");

/**
 * CONFIG DATABASE
 */

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "172.28.0.2",
    "port" => "3306",
    "dbname" => "crud",
    "username" => "root",
    "passwd" => "123",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

/**
 * @param $path
 * @return string
 */
function asset($path): string
{
    return ROOT . "/src/Views/assets{$path}";
}

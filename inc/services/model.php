<?php

/**
 * Class Model сервисный класс для подключения к БД
 */
class Model
{
    public static $dbc;

    public static function getDbc()
    {
        if (!self::$dbc) {
            self::$dbc = new PDO('mysql: host=' . APP_DB_HOST . '; dbname=' . APP_DB_DATABASE, APP_DB_USER, APP_DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        }
        return self::$dbc;
    }
    public static function query($query)
    {
        return self::getDbc()->query($query);
    }
    public static function prepare($query)
    {
        return self::getDbc()->prepare($query);
    }
}
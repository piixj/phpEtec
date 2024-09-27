<?php

namespace App\persistence;

class ConnectionFactory{

private static $connection = null;

    public static function getConnection(): PDO{
        if (self::connection == null) {
            $dnsStr = "mysql:host=127.0.0.1;dbname=BD_ETEC";
            self::$connection = new \PDO(dsn: $dnsStr, username: "root", password:"admin123");
            self::$connection->setAttribute(attribute: \PDO::ATTR_ERRMODE, value: \PDO::ERRMODE_EXCEPTION); 
        }
        return self::$connection;
    }
}
<?php

namespace Config;

use PDO;

class Database
{
    public static $host = "localhost";
    public static $dbname = "oopphp";
    public static $username = "admin";
    public static $password = "adminoke";

    public static ?PDO $pdo = null;

    public static function connect() :PDO{
        $dsn = "mysql:host=".self::$host.";dbname=".self::$dbname;
        // $dsn = "mysql:host=localhost;dbname=oopphp";

        if (self::$pdo == null) {
            self::$pdo = new PDO($dsn, self::$username, self::$password);
        }

        return self::$pdo;
    }
}
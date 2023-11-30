<?php

namespace app\Database;

use \PDO;
use \PDOException;

class Connection
{
    const HOST = 'localhost';
    const NAME = 'project_laravel';
    const USER = 'docker';
    const PASS = 'ignite';

    protected static ?PDO $connection = null;

    public static function getConnection()
    {
        try {
            self::$connection = new PDO('pgsql:host=' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return self::$connection;
        } catch (PDOException $e) {
            die('ERROR: ' . $e->getMessage());
        }
    }
}

<?php
namespace PHPMVC\App\Lib\Database;

abstract class DatabaseHandler
{
    const DATABASE_DRIVER_POD       = 'PDO';
    const DATABASE_DRIVER_MYSQLI    = 'MYSQLI';

    private function __construct() {}

    abstract protected static function init();

    abstract protected static function getInstance();

    public static function factory()
    {
        $driver = DATABASE_CONN_DRIVER;
        if ($driver == self::DATABASE_DRIVER_POD) {
            return PDODatabaseHandler::getInstance();
        } elseif ($driver == self::DATABASE_DRIVER_MYSQLI) {
            return MySQLiDatabaseHandler::getInstance();
        }
    }
}
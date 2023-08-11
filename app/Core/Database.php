<?php

namespace GBU\Core;
use PDO;
class Database
{
    private static ?PDO $pdo =null;

    public static function connect(): PDO
    {
    if (!self::$pdo) {
        self::$pdo = new PDO(
            "sqlsrv:Server=172.25.5.100;Database=samay",
            "sa",
            "Time_2018");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        self::$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

            }
    return self::$pdo;
    }
}
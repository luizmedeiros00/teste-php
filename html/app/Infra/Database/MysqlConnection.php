<?php

namespace App\Infra\Database;

use App\Infra\Database\IConnection;

class MysqlConnection implements IConnection
{
    public $connection;

    public function __construct()
    {
        $this->connection = new \PDO(
            "mysql:dbname=teste;host=mysqldb",
            "root", "root"
        );

    }

    public function query(string $statement, $params)
    {
        return $this->connection->prepare($statement)->execute($params);
    }

    public function getLastInsertId(): int
    {
        return $this->connection->lastInsertId();
    }
}


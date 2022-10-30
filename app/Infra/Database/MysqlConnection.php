<?php

namespace App\Infra\Database;

use App\Infra\Database\ConnectionInterface;
class MysqlConnection implements ConnectionInterface
{
    private $connection;

    public function __construct()
    {
        $this->connection = new \PDO(
            "mysql:dbname=teste;host=mysqldb",
            "root", "root"
        );

    }

    public function insert(string $statement, $params)
    {
        return $this->connection->prepare($statement)->execute($params);
    }

    public function select(string $statement): array
    {
        return $this->connection->query($statement)->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function where(string $statement, $params): array
    {
        $stmt = $this->connection->prepare($statement);
        $stmt->execute($params);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getLastInsertId(): int
    {
        return $this->connection->lastInsertId();
    }

    public function query(string $statement)
    {
        $this->connection->exec($statement);
    }
}


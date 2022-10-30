<?php

namespace App\Infra\Repository;

use App\Infra\Database\ConnectionInterface;
class UserRepository
{
    public function __construct(
        private ConnectionInterface $connection
    ) {
    }

    public function create($dados): int
    {
        $stmt = "INSERT INTO users (name, userName, zipCode, email, password) VALUES (:name,:userName,:zipCode,:email,:password)";

        $this->connection->insert($stmt, $dados);

        return $this->connection->getLastInsertId();
    }

    public function all()
    {
        $stmt = "SELECT * FROM users";

        return $this->connection->select($stmt);
    }

    public function where(array $params)
    {
        $where = array();
        foreach ($params as $key => $value) {
            $where[] = $key . "=?";
        }
        $values = array_values($params);
        $stmt = sprintf('SELECT * FROM users WHERE %s', implode(' AND ', $where));

        return $this->connection->where($stmt, $values);
    }
}

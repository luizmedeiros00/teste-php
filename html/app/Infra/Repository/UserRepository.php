<?php

namespace App\Infra\Repository;

use App\Infra\Database\IConnection;

class UserRepository
{
    public function __construct(
        private IConnection $connection
    ) {
    }

    public function insert($dados): int
    {
        $stmt = "INSERT INTO users (name, userName, zipCode, email, password) VALUES (:name,:userName,:zipCode,:email,:password)";

        $this->connection->query($stmt, $dados);

        return $this->connection->getLastInsertId();
    }
}

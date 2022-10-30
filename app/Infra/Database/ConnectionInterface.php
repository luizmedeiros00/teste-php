<?php

namespace App\Infra\Database;

interface ConnectionInterface
{
    public function insert(string $statemen, $params);

    public function select(string $statemen): array;

    public function where(string $statemen, $params): array;

    public function getLastInsertId(): int;

    public function query(string $statemen);
}
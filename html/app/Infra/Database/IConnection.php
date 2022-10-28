<?php

namespace App\Infra\Database;

interface IConnection
{
    public function query(string $statemen, $params);

    public function getLastInsertId(): int;
}
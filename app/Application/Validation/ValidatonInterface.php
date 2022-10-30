<?php

namespace App\Application\Validation;

interface ValidatonInterface
{
    public function __construct($value, string $name);

    public function validate(): string;
}

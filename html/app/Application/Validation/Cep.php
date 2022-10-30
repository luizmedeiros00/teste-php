<?php

namespace App\Application\Validation;

class Cep implements ValidatonInterface
{
    public function __construct(
        protected $value,
        protected string $name
    ) {
    }

    public function validate(): string
    {
        if (!preg_match("/^[0-9]{5}-[0-9]{3}$/", $this->value)) {
            return "$this->name is not valid";
        }

        return '';
    }
}

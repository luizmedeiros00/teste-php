<?php

namespace App\Application\Validation;

class Password implements ValidatonInterface
{
    public function __construct(
        protected $value,
        protected string $name
    ) {
    }

    public function validate(): string
    {
        if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $this->value)) {
            return "$this->name is not valid";
        }

        return '';
    }
}

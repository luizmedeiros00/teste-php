<?php

namespace App\Application\Validation;

class Email implements ValidatonInterface
{
    public function __construct(
        protected $value,
        protected string $name
    ) {
    }

    public function validate(): string
    {
        if (!filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            return "$this->name is not valid";
        }

        return '';
    }
}

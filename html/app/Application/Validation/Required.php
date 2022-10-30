<?php

namespace App\Application\Validation;

class Required implements ValidatonInterface
{
    public function __construct(
        protected $value,
        protected string $name
    ) {
    }

    public function validate(): string
    {
        if (strlen($this->value) === 0) {
            return "$this->name is required";
        }

        return '';
    }
}

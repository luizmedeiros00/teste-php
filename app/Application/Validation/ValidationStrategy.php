<?php

namespace App\Application\Validation;

class ValidationStrategy
{
    public function __construct(
        protected ValidatonInterface $validation
    ) {
    }

    public function validate(): string
    {
        return $this->validation->validate();
    }
}

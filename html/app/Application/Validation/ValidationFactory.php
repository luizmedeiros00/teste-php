<?php

namespace App\Application\Validation;

class ValidationFactory
{
    public static function build($class, $value, $name)
    {
        switch ($class) {
            case 'required':
                return new Required($value, $name);
                break;
            case 'cep':
                return new Cep($value, $name);
                break;
            case 'email':
                return new Email($value, $name);
                break;
            case 'password':
                return new Password($value, $name);
                break;
            default:
                return false;
                break;
        }
    }
}

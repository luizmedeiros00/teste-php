<?php

namespace App\Application\Validation;

class Validator
{
    public static function make(array $request, array $rules)
    {
        $errors = [];

        foreach ($rules as $key => $rule) {
            $rules = [];
            $name = $key;
            $value = $request[$key];
            $rules = explode('|', $rule);
            foreach ($rules as $ruleName) {
                $ruleClass = ValidationFactory::build($ruleName, $value, $name);
                $error = (new ValidationStrategy(
                    $ruleClass
                ))->validate();
      
                if ($error) $errors[] = $error;
            }
        }

        return $errors;
    }
}

<?php

namespace Sismut\BusinessRulesValidation\Interfaces;

use Sismut\BusinessRulesValidation\DataTypes\ValidationResult;

/**
 * User: @fabianjuarezmx
 * Date: 5/06/17
 * Time: 11:50 PM
 */
interface ValidationInterface
{
    /**
     * @param array $params
     * @return ValidationResult
     */
    public function validate(array $params);
}

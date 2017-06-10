<?php

namespace Sismut\BusinessRulesValidation;

use Sismut\BusinessRulesValidation\DataTypes\ValidationResult;

/**
 * User: @fabianjuarezmx
 * Date: 9/06/17
 * Time: 02:58 AM
 */
abstract class AbstractBusinessRule
{
    /**
     * @var ValidationResult
     */
    protected $validationResult;

    /**
     * AbstractBusinessRule constructor.
     * @param ValidationResult $validationResult
     */
    public function __construct(ValidationResult $validationResult)
    {
        $this->validationResult = $validationResult;
    }
}

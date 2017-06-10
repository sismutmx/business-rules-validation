<?php

namespace Sismut\BusinessRulesValidation\Factories;

use Exception;
use Sismut\BusinessRulesValidation\Interfaces\FactoryInterface;
use Sismut\BusinessRulesValidation\Interfaces\ValidationInterface;

/**
 * User: @fabianjuarezmx
 * Date: 5/06/17
 * Time: 11:48 PM
 */
class ValidatorFactory implements FactoryInterface
{
    /**
     * @param $validatorPath
     * @return ValidationInterface
     * @throws Exception
     */
    public function create($validatorPath)
    {
        $validator = app($validatorPath);

        if (!($validator instanceof ValidationInterface)) {
            $msg = $validatorPath . ' no es una instancia válida de';
            $msg .= 'Sismut\BusinessRulesValidation\Interfaces\ValidationInterface';
            throw new Exception($msg);
        }

        return $validator;
    }
}

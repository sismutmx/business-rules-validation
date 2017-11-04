<?php

namespace Sismut\BusinessRulesValidation;

use Sismut\BusinessRulesValidation\DataTypes\ValidationResult;
use Sismut\BusinessRulesValidation\Factories\ValidatorFactory;

/**
 * User: @fabianjuarezmx
 * Date: 5/06/17
 * Time: 11:39 PM
 */
trait BusinessRulesValidator
{
    /**
     * @param array $params
     * @param array $validators
     * @param bool $breakAtFirstFail
     * @return ValidationResult
     * @throws \Exception
     */
    public function validate(array $params, array $validators, $breakAtFirstFail = true)
    {
        /** @var ValidationResult $finalValidationResult */
        $finalValidationResult = app(ValidationResult::class);

        if (empty($validators)) {
            $finalValidationResult->setSuccess(true);
            return $finalValidationResult;
        }

        $successfulValidations = true;
        /** @var ValidatorFactory $validatorFactory */
        $validatorFactory = app(ValidatorFactory::class);
        foreach ($validators as $path) {
            $validator = $validatorFactory->create($path);
            /** @var ValidationResult $validationResult */
            $validationResult = $validator->validate($params);
            if ($validationResult->isSuccess()) {
                continue;
            }

            $clientMessages = $validationResult->getClientMessages();
            if (!empty($clientMessages)) {
                $finalValidationResult->setClientMessages($clientMessages);
            }

            $successfulValidations = false;
            if ($breakAtFirstFail) {
                $finalValidationResult->setSuccess($successfulValidations);
                return $finalValidationResult;
            }
        }
        $finalValidationResult->setSuccess($successfulValidations);
        return $finalValidationResult;
    }
}

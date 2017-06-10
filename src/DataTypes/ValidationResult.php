<?php

namespace Sismut\BusinessRulesValidation\DataTypes;

/**
 * User: @fabianjuarezmx
 * Date: 5/06/17
 * Time: 11:43 PM
 */
class ValidationResult
{
    /**
     * @var bool
     */
    protected $success = false;

    /**
     * Mensajes para cliente
     * @var array
     */
    protected $clientMessages = [];

    /**
     * Mensajes para administradores del sistema
     * @var array
     */
    protected $systemMessages = [];

    /**
     * @return boolean
     */
    public function isSuccess()
    {
        return $this->success;
    }

    /**
     * @param boolean $success
     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }

    /**
     * @return array
     */
    public function getClientMessages()
    {
        return $this->clientMessages;
    }

    /**
     * @param ValidationMessage $validationMessage
     * @return ValidationResult
     */
    public function addClientMessage(ValidationMessage $validationMessage)
    {
        array_push($this->clientMessages, $validationMessage);
        return $this;
    }

    /**
     * @return array
     */
    public function getSystemMessages()
    {
        return $this->systemMessages;
    }

    /**
     * @param array $systemMessages
     */
    public function setSystemMessages($systemMessages)
    {
        $this->systemMessages = $systemMessages;
    }
}

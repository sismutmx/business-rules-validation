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
     * Arreglo de parametros que se deseen retornar desde un validador especifico
     * @var array
     */
    protected $responseParams = [];

    /**
     * @return array
     */
    public function getClientMessages()
    {
        return $this->clientMessages;
    }

    /**
     * @param array $clientMessages
     */
    public function setClientMessages(array $clientMessages)
    {
        $this->clientMessages = $clientMessages;
    }

    /**
     * @param ValidationMessage $validationMessage
     * @return ValidationResult
     */
    public function addClientValidationMessage(ValidationMessage $validationMessage)
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

    /**
     * Obtener los mensajes para usuarios del sistema resultado de validaciones
     * @return array
     */
    public function clientMessagesToArray()
    {
        $clientMessages = $this->getClientMessages();
        if (empty($clientMessages)) {
            return $clientMessages;
        }

        $messages = [];
        /** @var ValidationMessage $clientMessage */
        foreach ($clientMessages as $clientMessage) {
            $item = [
                'type' => $clientMessage->getAlertType(),
                'msg' => $clientMessage->getMessage()
            ];

            array_push($messages, $item);
        }

        return $messages;
    }

    /**
     * @return array
     */
    public function getResponseParams()
    {
        return $this->responseParams;
    }

    /**
     * @param array $responseParams
     */
    public function setResponseParams(array $responseParams)
    {
        if (!empty($this->responseParams)) {
            $responseParams = array_merge($this->responseParams, $responseParams);
        }
        $this->responseParams = $responseParams;
    }

    /**
     * @param $key
     * @param $value
     */
    public function addResponseParam($key, $value)
    {
        $this->responseParams[$key] = $value;
    }

    /**
     * @param $key
     * @return bool
     */
    public function hasResponseParam($key)
    {
        return array_key_exists($key, $this->responseParams);
    }

    /**
     * @param $key
     * @param null $defaultValue
     * @return null
     */
    public function getResponseParamByKey($key, $defaultValue = null)
    {
        if (!$this->hasResponseParam($key)) {
            return $defaultValue;
        }

        return $this->responseParams[$key];
    }

    /**
     * @param $type
     * @param $message
     * @return $this
     */
    public function addClientMessage($type, $message)
    {
        $validationMessage = new ValidationMessage();
        $validationMessage->setAlertType($type);
        $validationMessage->setMessage($message);
        array_push($this->clientMessages, $validationMessage);
        return $this;
    }
}

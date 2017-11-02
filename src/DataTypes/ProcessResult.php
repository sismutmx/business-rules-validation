<?php

namespace Sismut\BusinessRulesValidation\DataTypes;

/**
 * User: @fabianjuarezmx
 * Date: 11/2/17
 * Class ProcessResult
 * @package Sismut\BusinessRulesValidation\DataTypes
 */
class ProcessResult
{
    /**
     * Bandera para saber si el resultado del proceso fue exitoso, default se asume que no fue exitoso
     * @var bool
     */
    protected $success = false;

    /**
     * Arreglo con mensajes para los usuarios del sistema
     * @var array
     */
    protected $systemUserMessages = [];

    /**
     * Arreglo para almacenar datos que se necesiten como resultado de algún proceso
     * @var array
     */
    protected $resultParams = [];

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
    public function getSystemUserMessages()
    {
        return $this->systemUserMessages;
    }

    /**
     * @param array $messages
     */
    public function setSystemUserMessages($messages)
    {
        if (!empty($this->systemUserMessages)) {
            $messages = array_merge($this->systemUserMessages, $messages);
        }
        $this->systemUserMessages = $messages;
    }

    /**
     * @param array $message
     */
    public function addSystemUserMessage(array $message)
    {
        array_push($this->systemUserMessages, $message);
    }

    /**
     * @return array
     */
    public function getResultParam()
    {
        return $this->resultParams;
    }

    /**
     * @param array $resultValues
     */
    public function setResultParam($resultValues)
    {
        if (!empty($this->systemUserMessages)) {
            $resultValues = array_merge($this->resultParams, $resultValues);
        }
        $this->resultParams = $resultValues;
    }

    /**
     * @param $key
     * @return bool
     */
    public function hasResultParam($key)
    {
        return array_key_exists($key, $this->resultParams);
    }

    /**
     * @param $key
     * @param null $defaultValue
     * @return null
     */
    public function getResultParamByKey($key, $defaultValue = null)
    {
        if (!$this->hasResultParam($key)) {
            return $defaultValue;
        }

        return $this->resultParams[$key];
    }
}

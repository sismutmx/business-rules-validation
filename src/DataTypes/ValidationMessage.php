<?php

namespace Sismut\BusinessRulesValidation\DataTypes;

/**
 * User: @fabianjuarezmx
 * Date: 9/06/17
 * Time: 03:06 AM
 */
class ValidationMessage
{
    /**
     * @var
     */
    protected $errorCode;

    /**
     * @var
     */
    protected $message;

    /**
     * @var
     */
    protected $logLevel;

    /**
     * @var array
     */
    protected $notificationChannels = [];

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @param mixed $errorCode
     */
    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }
}

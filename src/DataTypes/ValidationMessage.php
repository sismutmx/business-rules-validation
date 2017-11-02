<?php

namespace Sismut\BusinessRulesValidation\DataTypes;

/**
 * User: @fabianjuarezmx
 * Date: 9/06/17
 * Time: 03:06 AM
 */
class ValidationMessage
{
    const TYPE_DANGER = 'danger';
    const TYPE_SUCCESS = 'success';
    const TYPE_INFO = 'info';
    const TYPE_WARNING = 'warning';

    /**
     * Código de error relacionado
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
     * Tipo de alerta para mostrar al usuario: success, danger, info, etc.
     * @var string
     */
    protected $alertType;

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

    /**
     * @return string
     */
    public function getAlertType()
    {
        return $this->alertType;
    }

    /**
     * @param string $alertType
     */
    public function setAlertType($alertType)
    {
        $this->alertType = $alertType;
    }
}

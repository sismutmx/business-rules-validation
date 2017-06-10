<?php

namespace Sismut\BusinessRulesValidation\Interfaces;

/**
 * User: @fabianjuarezmx
 * Date: 6/06/17
 * Time: 12:04 AM
 */
interface FactoryInterface
{
    /**
     * @param $absolutePath
     * @return mixed
     */
    public function create($absolutePath);
}
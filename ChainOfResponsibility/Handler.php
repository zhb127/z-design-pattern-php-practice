<?php

namespace ChainOfResponsibility;

/**
 * Class Handler
 * @package ChainOfResponsibility
 */
abstract class Handler
{
    protected $successor;

    public function setSuccessor($successor)
    {
        $this->successor = $successor;
    }

    abstract public function handleRequest($request);
}
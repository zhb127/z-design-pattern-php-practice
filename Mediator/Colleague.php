<?php

namespace Mediator;

abstract class Colleague
{
    protected $mediator;

    public function __construct($mediator)
    {
        $this->mediator = $mediator;
    }
}
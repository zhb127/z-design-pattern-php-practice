<?php

namespace Mediator;

abstract class Mediator
{
    abstract public function send($message, $colleague);
}
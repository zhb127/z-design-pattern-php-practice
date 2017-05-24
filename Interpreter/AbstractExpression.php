<?php

namespace Interpreter;

abstract class AbstractExpression
{

    abstract public function interpret($context);
}
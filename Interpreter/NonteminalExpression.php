<?php

namespace Interpreter;

class NonteminalExpression extends AbstractExpression
{
    public function interpret($context)
    {
        echo "非终端解释器\n";
    }
}
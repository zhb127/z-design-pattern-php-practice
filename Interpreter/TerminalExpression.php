<?php

namespace Interpreter;

class TerminalExpression extends AbstractExpression
{
    public function interpret($context)
    {
        echo "终端解释器\n";
    }
}
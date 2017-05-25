<?php

namespace Visitor;

class ConcreteElementB extends Element
{
    public function accept(Visitor $visitor)
    {
        $visitor->visitorConcreteElementB($this);
    }

    public function operationB()
    {
    }
}
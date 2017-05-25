<?php

namespace Visitor;

class ConcreteElementA extends Element
{
    public function accept(Visitor $visitor)
    {
        $visitor->visitorConcreteElementA($this);
    }

    public function operationA()
    {
    }
}
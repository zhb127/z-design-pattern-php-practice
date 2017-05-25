<?php

namespace Visitor;

class ConcreteVisitor2 extends Visitor
{

    public function visitorConcreteElementA($concreteElementA)
    {
        echo "ConcreteElementA 被 " . __CLASS__ . " 访问\n";
    }

    public function visitorConcreteElementB($concreteElementB)
    {
        echo "ConcreteElementB 被 " . __CLASS__ . " 访问\n";
    }
}
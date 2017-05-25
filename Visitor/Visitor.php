<?php

namespace Visitor;

abstract class Visitor
{

    abstract public function visitorConcreteElementA($concreteElementA);

    abstract public function visitorConcreteElementB($concreteElementB);
}
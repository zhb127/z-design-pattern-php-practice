<?php

namespace Visitor;

abstract class Element
{
    abstract public function accept(Visitor $visitor);
}
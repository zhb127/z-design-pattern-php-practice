<?php

namespace Visitor;

class ObjectStructure
{

    private $elements = array();

    public function attach(Element $element)
    {
        $this->elements[] = $element;
    }

    public function dettach(Element $element)
    {
        $key = array_search($element, $this->elements);
        if (false !== $key) {
            unset($this->elements[$key]);
        }
    }

    public function accept(Visitor $visitor)
    {
        foreach ($this->elements as $element) {
            $element->accept($visitor);
        }
    }
}
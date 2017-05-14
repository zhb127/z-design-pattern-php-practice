<?php

namespace Decorator;

/**
 * 服饰类
 */
class Finery extends Person
{
    private $_component;

    public function decorate(Person $component)
    {
        $this->_component = $component;
    }

    public function show()
    {
        if ($this->_component) {
            $this->_component->show();
        }
    }

}
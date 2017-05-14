<?php

namespace Prototype;

class Prototype extends PrototypeAbstract
{

    public function __construct($name = '')
    {
        $this->_name = $name;
    }

    public function setName($value)
    {
        $this->_name = $value;
    }

    public function getName()
    {
        echo '我是对象' . $this->_name . PHP_EOL;
    }

    public function getClone()
    {
        return clone $this;
    }
}
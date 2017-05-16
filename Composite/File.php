<?php

namespace Composite;

class File implements IComponent
{
    private $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function add(IComponent $component)
    {
    }

    public function remove(IComponent $component)
    {
    }

    public function display($depth)
    {
        echo $depth, $this->getName(), PHP_EOL;
    }
}
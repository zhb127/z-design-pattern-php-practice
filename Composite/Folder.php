<?php

namespace Composite;

class Folder implements IComponent
{
    private $_name;

    private $_components;

    public function __construct($name)
    {
        $this->_name = $name;
        $this->_components = array();
    }

    public function getName()
    {
        return $this->_name . '/';
    }

    public function add(IComponent $component)
    {
        if (!in_array($component, $this->_components, true)) {
            $this->_components[] = $component;
        }
    }

    public function remove(IComponent $component)
    {
        $index = array_search($component, $this->_components);
        if ($index) {
            unset($this->_components[$index]);
        }
    }

    public function display($depth = '')
    {
        echo $depth, $this->getName(), PHP_EOL;

        foreach ($this->_components as $v) {
            $v->display($depth . '--');
        }
    }
}
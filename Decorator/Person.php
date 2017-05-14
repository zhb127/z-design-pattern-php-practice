<?php

namespace Decorator;

/**
 * 人类
 */
class Person
{
    private $_name;

    public function __construct($name = '')
    {
        $name && $this->_name = $name;
    }

    public function show()
    {
        echo '装扮的', $this->_name, PHP_EOL;
    }
}
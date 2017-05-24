<?php

namespace Interpreter;

class Context
{
    private $input;
    private $output;

    public function __get($name)
    {
        if (!isset($this->$name)) {
            echo "$name 属性不存在\n";
        } else {
            return $this->$name;
        }

    }

    public function __set($name, $value)
    {
        if (!isset($this->$name)) {
            echo "$name 属性不存在\n";
        } else {
            $this->$name = $value;
        }
    }
}
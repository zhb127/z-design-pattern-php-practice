<?php

namespace Bridge\Sample;

abstract class PenAbstract
{

    protected $_color;

    public function setColor($color)
    {
        $this->_color = $color;
    }

    public abstract function draw($name);
}
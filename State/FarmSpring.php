<?php
namespace State;

class FarmSpring implements IFarm
{
    private $_name = '玉米';

    function grow()
    {
        echo "种植了一片 {$this->_name}", PHP_EOL;
    }

    function harvest()
    {
        echo "收获了一片 {$this->_name}", PHP_EOL;
    }
}
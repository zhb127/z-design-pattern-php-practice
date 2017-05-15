<?php
namespace State;

class FarmWinter implements IFarm
{
    private $_name = '菠菜';

    function grow()
    {
        echo "种植了一片 {$this->_name}", PHP_EOL;
    }

    function harvest()
    {
        echo "收获了一片 {$this->_name}", PHP_EOL;
    }
}
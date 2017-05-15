<?php
namespace State;

class FarmAutumn implements IFarm
{
    private $_name = '白菜';

    function grow()
    {
        echo "种植了一片 {$this->_name}", PHP_EOL;
    }

    function harvest()
    {
        echo "收获了一片 {$this->_name}", PHP_EOL;
    }
}
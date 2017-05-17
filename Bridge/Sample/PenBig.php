<?php

namespace Bridge\Sample;

class PenBig extends PenAbstract
{

    public function draw($name)
    {
        $penType = '大号圆珠笔';
        $this->_color->paint($penType, $name);
    }
}
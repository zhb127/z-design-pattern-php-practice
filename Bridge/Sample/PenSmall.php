<?php

namespace Bridge\Sample;

class PenSmall extends PenAbstract
{

    public function draw($name)
    {
        $penType = '小号圆珠笔';
        $this->_color->paint($penType, $name);
    }
}
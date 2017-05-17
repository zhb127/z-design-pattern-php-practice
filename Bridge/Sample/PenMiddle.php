<?php

namespace Bridge\Sample;

class PenMiddle extends PenAbstract
{

    public function draw($name)
    {
        $penType = '中号圆珠笔';
        $this->_color->paint($penType, $name);
    }
}
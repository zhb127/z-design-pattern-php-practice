<?php

namespace Bridge\Sample;

class ColorRed implements IColor
{

    public function paint($penType, $name)
    {
        echo '红色' . $penType . '写字：' . $name, PHP_EOL;
    }
}
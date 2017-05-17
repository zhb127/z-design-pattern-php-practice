<?php

namespace Bridge\Sample;

class ColorBlue implements IColor
{

    public function paint($penType, $name)
    {
        echo '蓝色' . $penType . '写字：' . $name, PHP_EOL;
    }
}
<?php

namespace Command\Sample;

class TV
{

    public function open()
    {
        echo '打开电视！', PHP_EOL;
    }

    public function close()
    {
        echo '关闭电视！', PHP_EOL;
    }

    public function changeChannel()
    {
        echo '更换频道！', PHP_EOL;
    }
}
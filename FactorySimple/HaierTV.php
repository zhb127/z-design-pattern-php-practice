<?php

namespace FactorySimple;

class HaierTV implements ITV
{
    public function play()
    {
        echo '海尔电视机播放。', PHP_EOL;
    }
}
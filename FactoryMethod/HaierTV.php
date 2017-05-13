<?php

namespace FactoryMethod;

class HaierTV implements TVInterface
{
    public function play()
    {
        echo '海尔电视机播放。', PHP_EOL;
    }
}
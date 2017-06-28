<?php

namespace DesignPatterns\Creational\SimpleFactory;

class HisenseTV implements ITV
{
    public function play()
    {
        echo '海信电视机播放。', PHP_EOL;
    }
}
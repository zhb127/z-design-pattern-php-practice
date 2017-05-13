<?php

namespace FactoryAbstract;

class TCLTV implements ITV
{
    public function play()
    {
        echo 'TCL 电视机播放。', PHP_EOL;
    }
}
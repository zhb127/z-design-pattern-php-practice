<?php

namespace FactoryAbstract;

class HisenseAC implements IAC
{
    public function changeTemperature()
    {
        echo '海信空调改变温度。', PHP_EOL;
    }
}
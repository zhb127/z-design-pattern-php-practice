<?php

namespace FactoryAbstract;

class HaierAC implements IAC
{
    public function changeTemperature()
    {
        echo '海尔空调改变温度。', PHP_EOL;
    }
}
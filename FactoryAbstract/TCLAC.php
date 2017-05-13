<?php

namespace FactoryAbstract;

class TCLAC implements IAC
{
    public function changeTemperature()
    {
        echo 'TCL 空调改变温度。', PHP_EOL;
    }
}
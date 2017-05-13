<?php

namespace FactoryAbstract;

class TCLFactory implements IFactory
{
    public function produceTV()
    {
        echo 'TCL 工厂生产电视机。', PHP_EOL;
        return new TCLTV();
    }

    public function produceAC()
    {
        echo 'TCL 工厂生产空调。', PHP_EOL;
        return new TCLAC();
    }
}
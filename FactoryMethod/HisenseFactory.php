<?php

namespace FactoryMethod;

class HisenseFactory implements IFactory
{
    public function produceTV()
    {
        echo '海信工厂生产海信电视机。', PHP_EOL;
        return new HisenseTV();
    }
}
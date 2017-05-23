<?php

namespace Flyweight;

class UnsharedConcreteFlyweight extends Flyweight
{

    public function operation($extrinsicstate)
    {
        echo "不共享的具体 Flyweight：{$extrinsicstate}\n";
    }
}
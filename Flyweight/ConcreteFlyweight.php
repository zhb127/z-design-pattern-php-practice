<?php

namespace Flyweight;

class ConcreteFlyweight extends Flyweight
{

    public function operation($extrinsicstate)
    {
        echo "具体 Flyweight：{$extrinsicstate}\n";
    }
}
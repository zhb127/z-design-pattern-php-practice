<?php

namespace Flyweight;

class FlyweightFactory
{

    private $flyweights;

    public function __construct()
    {
        $this->flyweights['X'] = new ConcreteFlyweight();
        $this->flyweights['Y'] = new ConcreteFlyweight();
        $this->flyweights['Z'] = new ConcreteFlyweight();
    }

    public function getFlyweight($key)
    {
        return $this->flyweights[$key];
    }
}
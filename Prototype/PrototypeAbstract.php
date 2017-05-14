<?php

namespace Prototype;

abstract class PrototypeAbstract
{
    protected $_name;

    public abstract function getName();

    public abstract function getClone();
}
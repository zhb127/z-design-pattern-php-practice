<?php

namespace Composite;

interface IComponent
{

    public function add(IComponent $component);

    public function remove(IComponent $component);

    public function display($depth);
}
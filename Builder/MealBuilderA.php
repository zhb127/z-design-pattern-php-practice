<?php

namespace Builder;

class MealBuilderA extends MealBuilderAbstract
{
    public function buildFood()
    {
        $this->_meal->setFood('薯条+板烧鸡腿堡');
    }

    public function buildDrink()
    {
        $this->_meal->setDrink('可乐');
    }
}
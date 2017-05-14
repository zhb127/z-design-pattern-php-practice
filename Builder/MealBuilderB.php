<?php

namespace Builder;

class MealBuilderB extends MealBuilderAbstract
{
    public function buildFood()
    {
        $this->_meal->setFood('薯条+香辣鸡腿堡');
    }

    public function buildDrink()
    {
        $this->_meal->setDrink('橙汁');
    }
}
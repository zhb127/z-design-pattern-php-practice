<?php

namespace Builder;

abstract class MealBuilderAbstract
{
    protected $_meal;

    public function __construct()
    {
        $this->_meal = new Meal();
    }

    public abstract function buildFood();

    public abstract function buildDrink();

    public function showMealResult()
    {
        echo '--当前套餐--', PHP_EOL;
        echo '食物：', $this->_meal->getFood(), PHP_EOL;
        echo '饮料：', $this->_meal->getDrink(), PHP_EOL;
    }
}
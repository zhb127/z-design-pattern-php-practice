<?php

namespace Builder;

class Meal
{
    private $_food;
    private $_drink;

    public function setFood($food)
    {
        $this->_food = $food;
    }

    public function setDrink($drink)
    {
        $this->_drink = $drink;
    }

    public function getFood()
    {
        return $this->_food;
    }

    public function getDrink()
    {
        return $this->_drink;
    }
}
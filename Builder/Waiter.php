<?php

namespace Builder;

/**
 * 服务员类
 *
 * 服务员在这里相当于指挥者
 */
class Waiter
{
    private $_mb;

    public function setMealBuilder(MealBuilderAbstract $mb)
    {
        $this->_mb = $mb;
    }

    public function showMealResult()
    {
        $this->_mb->buildFood();
        $this->_mb->buildDrink();
        $this->_mb->showMealResult();
    }
}
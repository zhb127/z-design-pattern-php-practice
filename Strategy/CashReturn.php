<?php

namespace Strategy;

/**
 * 返利收费类
 */
class CashReturn extends CashAbstract
{
    private $_moneyCondition = 0;

    private $_moneyReturn = 0;

    public function __construct($moneyCondition, $moneyReturn)
    {
        $this->_moneyCondition = $moneyCondition;
        $this->_moneyReturn = $moneyReturn;
    }

    public function acceptCash($money)
    {
        $result = $money;

        if ($money >= $this->_moneyCondition) {
            $result = $money - floor($money / $this->_moneyCondition) * $this->_moneyReturn;
        }

        return $result;
    }
}
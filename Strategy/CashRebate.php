<?php

namespace Strategy;

/**
 * 打折收费类
 */
class CashRebate extends CashAbstract
{
    private $_moneyRebate = 1;

    public function __construct($moneyRebate)
    {
        $this->_moneyRebate = $moneyRebate;
    }

    public function acceptCash($money)
    {
        return $money * $this->_moneyRebate;
    }
}
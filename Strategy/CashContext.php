<?php

namespace Strategy;

/**
 * 收费上下文类
 */
class CashContext
{
    private $_cs;

    public function __construct($type)
    {
        switch ($type) {
            case 'normal':
                $this->_cs = new CashNormal();
                break;
            case 'rebate':
                $this->_cs = new CashRebate(0.8);
                break;
            case 'return':
                $this->_cs = new CashReturn(300, 100);
                break;
        }
    }

    public function getResult($money)
    {
        return $this->_cs->acceptCash($money);
    }
}
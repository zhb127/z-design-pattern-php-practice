<?php

namespace Strategy;

/**
 * 正常收费类
 */
class CashNormal extends CashAbstract
{

    public function acceptCash($money)
    {
        return $money;
    }
}
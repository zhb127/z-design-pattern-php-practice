<?php

namespace Decorator;

/**
 * 大垮裤类
 */
class BigTrouser extends Finery
{
    public function show()
    {
        echo '大垮裤 ';
        parent::show();
    }
}
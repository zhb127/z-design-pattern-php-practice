<?php

namespace Decorator;

/**
 * T 恤类
 */
class TShits extends Finery
{
    public function show()
    {
        echo 'T 恤 ';
        parent::show();
    }
}
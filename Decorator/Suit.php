<?php

namespace Decorator;

/**
 * 西装类
 */
class Suit extends Finery
{
    public function show()
    {
        echo '西装 ';
        parent::show();
    }
}
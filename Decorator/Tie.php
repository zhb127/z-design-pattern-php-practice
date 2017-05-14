<?php

namespace Decorator;

/**
 * 领带类
 */
class Tie extends Finery
{
    public function show()
    {
        echo '领带 ';
        parent::show();
    }
}
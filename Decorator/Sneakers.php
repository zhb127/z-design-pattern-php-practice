<?php

namespace Decorator;

/**
 * 破球鞋类
 */
class Sneakers extends Finery
{
    public function show()
    {
        echo '破球鞋 ';
        parent::show();
    }
}
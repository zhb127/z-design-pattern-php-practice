<?php

namespace Decorator;

/**
 * 皮鞋类
 */
class LeatherShoes extends Finery
{
    public function show()
    {
        echo '皮鞋 ';
        parent::show();
    }
}
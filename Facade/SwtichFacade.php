<?php

namespace Facade;

class SwtichFacade
{

    private $_ac;

    private $_tv;

    public function __construct()
    {

        $this->_ac = new AC();
        $this->_tv = new TV();

    }

    public function on()
    {
        echo '先打开空调：';
        $this->_ac->on();

        echo '再打开电视：';
        $this->_tv->on();
    }

    public function off()
    {
        echo '先关闭电视：';
        $this->_tv->off();

        echo '再关闭空调：';
        $this->_ac->off();
    }
}
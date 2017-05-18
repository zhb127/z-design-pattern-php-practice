<?php

namespace Command\Sample;

class CommandClose extends CommandAbstract
{

    private $_tv;

    public function __construct($tv)
    {
        $this->_tv = $tv;
    }

    public function execute()
    {
        $this->_tv->close();
    }
}
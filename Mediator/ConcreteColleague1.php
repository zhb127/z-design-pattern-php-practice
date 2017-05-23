<?php

namespace Mediator;

class ConcreteColleague1 extends Colleague
{

    public function __construct($mediator)
    {
        parent::__construct($mediator);
    }

    public function send($message)
    {
        $this->mediator->send($message, $this);
    }

    public function notify($message)
    {
        echo "同事1 得到消息：$message\n";
    }
}
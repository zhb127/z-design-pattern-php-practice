<?php

namespace Mediator;

class ConcreteMeditor extends Mediator
{
    private $colleague1;

    private $colleague2;

    public function setColleague1($value)
    {
        $this->colleague1 = $value;
    }

    public function setColleague2($value)
    {
        $this->colleague2 = $value;
    }

    public function send($message, $colleague)
    {
        if ($colleague == $this->colleague1) {
            $this->colleague1->notify($message);
        } else {
            $this->colleague2->notify($message);
        }
    }
}
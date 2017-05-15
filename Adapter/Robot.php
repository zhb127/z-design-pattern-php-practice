<?php

namespace Adapter;

class Robot
{
    private $_target;

    public function __construct($target)
    {
        switch ($target) {
            case 'bird':
                $this->_target = new BirdAdapter();
                break;
            case 'dog':
                $this->_target = new DogAdapter();
                break;
        }
    }

    public function cry()
    {
        echo '机器人模仿';
        $this->_target->cry();
    }

    public function move()
    {
        echo '机器人模仿';
        $this->_target->move();
    }
}
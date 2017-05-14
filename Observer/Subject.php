<?php

namespace Observer;

/**
 * 被观察者类
 */
class Subject extends SubjectAbstract
{

    private $_observers = array();

    public function attach(ObserverAbstract $observer)
    {
        if (!in_array($observer, $this->_observers, true)) {
            echo '添加观察者：', $observer->getName(), PHP_EOL;
            $this->_observers[] = $observer;
        }

    }

    public function detach(ObserverAbstract $observer)
    {
        foreach ($this->_observers as $k => $v) {
            if ($v === $observer) {
                echo '移除观察者：', $observer->getName(), PHP_EOL;
                unset($this->_observers[$k]);
                break;
            }
        }
    }

    public function notify()
    {
        foreach ($this->_observers as $v) {
            $v->doSomething($this);
        }
    }

}
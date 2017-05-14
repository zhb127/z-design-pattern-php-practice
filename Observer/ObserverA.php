<?php

namespace Observer;

class ObserverA extends ObserverAbstract
{
    public function doSomething(SubjectAbstract $subject)
    {
        echo "观察者 {$this->_name}：收到通知，开始执行任务 A。", PHP_EOL;
    }
}
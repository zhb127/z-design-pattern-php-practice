<?php

namespace Observer;

class ObserverB extends ObserverAbstract
{

    public function doSomething(SubjectAbstract $subject)
    {
        echo "观察者 {$this->getName()}：收到通知，开始执行任务 B。", PHP_EOL;
    }
}
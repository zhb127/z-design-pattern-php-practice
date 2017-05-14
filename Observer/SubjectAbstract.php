<?php

namespace Observer;

/**
 * 被观察者抽象类
 */
abstract class SubjectAbstract
{
    public abstract function notify();

    public abstract function attach(ObserverAbstract $observer);

    public abstract function detach(ObserverAbstract $observer);
}
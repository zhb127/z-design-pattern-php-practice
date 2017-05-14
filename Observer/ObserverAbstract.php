<?php
namespace Observer;

/**
 * 观察者抽象类
 */
abstract class ObserverAbstract
{
    protected $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }

    public function getName()
    {
        return $this->_name;
    }

    /**
     * 行为
     */
    public abstract function doSomething(SubjectAbstract $subject);
}
<?php

namespace Bridge;

/**
 * 实现化角色类
 */
abstract class Implementor
{

    public abstract function operation();
}

/**
 * 具体实现化角色 A 类
 */
class ConcreteImplementorA extends Implementor
{

    public function operation()
    {
        echo '具体实现 A 的方法执行', PHP_EOL;
    }
}

/**
 * 具体实现化角色 B 类
 */
class ConcreteImplementorB extends Implementor
{
    public function operation()
    {
        echo '具体实现 B 的方法执行', PHP_EOL;
    }
}

/**
 * 抽象化角色类
 */
class Abstraction
{
    /**
     * 实现化角色类对象
     *
     * @var Implementor
     */
    protected $_implementor;

    /**
     * 设置实现化角色类对象
     *
     * @param Implementor $implementor
     */
    public function setImplementor(Implementor $implementor)
    {
        $this->_implementor = $implementor;
    }

    public function operation()
    {
        $this->_implementor->operation();
    }
}

/**
 * 修正抽象化角色类
 */
class RefinedAbstraction extends Abstraction
{
    public function operation()
    {
        $this->_implementor->operation();
    }
}


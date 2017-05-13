<?php

/**
 * 单例模式
 *
 * 定义：确保一个类只有一个实例，而且自行实例化并向整个系统提供这个实例。
 *
 */

namespace Singleton;

include dirname(__DIR__) . '/autoload.php';

$obj1 = Singleton::getInstance();
$obj2 = Singleton::getInstance();

// 无法新建单例类的实例
// $obj3 = new Singleton();

// 无法克隆单例类的实例
// $obj4 = clone $obj1;

var_dump($obj1 === $obj2);
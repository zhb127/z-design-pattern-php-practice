<?php

/**
 * 原型模式
 *
 * 定义：用原型实例指定创建对象的种类，并且通过拷贝这些原型创建新的对象。
 *
 * 说明：原型模式其实就是从一个对象再创建另外一个可定制的对象，而且不需要知道任何创建的细节。
 */
namespace Prototype;

include dirname(__DIR__) . '/autoload.php';

$p0 = new Prototype(0);
$p0->getName();

$i = 0;
while (++$i < 5) {
    $px = $p0->getClone();
    $px->setName($i);
    $px->getName();
}

$p0->getName();
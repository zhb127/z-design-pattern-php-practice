<?php

/**
 * 简单工厂模式
 *
 * 简单工厂模式并不属于 GoF 23 个经典设计模式，但通常将它作为学习其他工厂模式的基础。
 *
 * 定义：定义一个工厂类，它可以根据参数的不同返回不同类的实例，被创建的实例通常都具有共同的父类。
 *
 * 三个要素：
 * - 工厂实现
 * - 产品接口
 * - 产品实现
 */

namespace FactorySimple;

include dirname(__DIR__) . '/autoload.php';

$tv1 = TVFactory::produceTV('Haier');
$tv1->play();

$tv2 = TVFactory::produceTV('Hisense');
$tv2->play();

try {
    $tv3 = TVFactory::produceTV('TCL');
} catch (\Exception $e) {
    echo $e->getMessage();
}


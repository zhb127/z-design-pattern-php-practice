<?php

/**
 * 工厂方法模式
 *
 * 定义：定义一个用于创建对象的接口，让其子类决定实例化哪一个目标类。
 *
 * 四个要素：
 * - 工厂接口
 * - 工厂实现
 * - 产品接口
 * - 产品实现
 */

namespace FactoryMethod;

include dirname(__DIR__) . '/autoload.php';

$fac1 = new HaierFactory();
$tv1 = $fac1->produceTV();
$tv1->play();

$fac2 = new HisenseFactory();
$tv2 = $fac2->produceTV();
$tv2->play();


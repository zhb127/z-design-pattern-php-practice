<?php

/**
 * 抽象工厂模式
 *
 * 抽象工厂模式为创建一组对象提供了一种解决方案。与工厂方法模式相比，抽象工厂模式中的具体工厂不只是创建一种产品，而是创建一族产品。
 *
 * 定义：为创建一组相关或相互依赖的对象提供一个接口，而且无需指定他们的具体类。
 *
 */
namespace FactoryAbstract;

include dirname(__DIR__) . '/autoload.php';

$fac1 = new HaierFactory();
$fac1->produceTV()->play();
$fac1->produceAC()->changeTemperature();

$fac2 = new HisenseFactory();
$fac2->produceTV()->play();
$fac2->produceAC()->changeTemperature();

$fac3 = new TCLFactory();
$fac3->produceTV()->play();
$fac3->produceAC()->changeTemperature();
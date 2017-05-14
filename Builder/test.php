<?php

/**
 * 建造者模式
 *
 * 定义：将一个复杂对象的构建与它的表示分离，使得同样的构建过程可以创建不同的表示。
 *
 * 四个要素：
 *
 * - 产品类
 * - 抽象建造者
 * - 建造者
 * - 指挥者
 */
namespace Builder;

include dirname(__DIR__) . '/autoload.php';

$waiter = new Waiter();
$waiter->setMealBuilder(new MealBuilderA());
$waiter->showMealResult();

$waiter->setMealBuilder(new MealBuilderB());
$waiter->showMealResult();
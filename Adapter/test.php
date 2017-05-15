<?php

/**
 * 适配器模式
 *
 * 定义：将一个类的接口装换成客户希望的另外一个接口。适配器模式使得原本由于接口不兼容而不能一起工作的那些类可以一起工作。
 */

namespace Adapter;

include dirname(__DIR__) . '/autoload.php';

$robot = new Robot('bird');
$robot->cry();
$robot->move();

$robot = new Robot('dog');
$robot->cry();
$robot->move();

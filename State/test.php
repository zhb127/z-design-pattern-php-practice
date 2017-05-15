<?php

/**
 * 状态模式
 *
 * 定义：允许一个对象在其内部状态改变时改变它的行为，对象看起来似乎修改了它的类。其别名为状态对象(Objects for States)，状态模式是一种对象行为型模式。
 *
 * 状态模式的几个要素：
 *
 * - 环境类
 * - 抽象状态类
 * - 具体状态类
 */
namespace State;

include dirname(__DIR__) . '/autoload.php';

$farmer = new Farmer();
$farmer->grow();
$farmer->harvest();

$farmer->grow();
$farmer->harvest();

$farmer->grow();
$farmer->harvest();

$farmer->grow();
$farmer->harvest();
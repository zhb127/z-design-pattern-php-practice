<?php

/**
 * 观察者模式
 *
 * 定义：定义对象间一种一对多的依赖关系，使得当每一个对象改变状态，则所有依赖于它的对象都会得到通知并自动更新。
 *
 * 观察者模式结构：
 *
 * - 被观察者接口
 * - 观察者接口
 * - 具体的被观察者
 * - 具体的观察者
 */
namespace Observer;

include dirname(__DIR__) . '/autoload.php';

$oa = new ObserverA('张三');
$ob = new ObserverB('李四');

$sub = new Subject();
$sub->attach($oa);
$sub->attach($ob);
$sub->notify();

$sub->detach($ob);
$sub->notify();
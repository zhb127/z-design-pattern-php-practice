<?php

/**
 * 中介者模式
 *
 * 定义：用一个中介对象来封装一系列的对象交互。中介者使各对象不需要显示地互相引用，从而使其耦合松散，而且可以独立地改变它们之间的交互。
 */
namespace Mediator;

include dirname(__DIR__) . '/autoload.php';

$m = new ConcreteMeditor();

$c1 = new ConcreteColleague1($m);
$c2 = new ConcreteColleague2($m);


$m->setColleague1($c1);
$m->setColleague2($c2);

$c1->send('吃过饭了吗');
$c2->send('没有呢，你打算请客？');


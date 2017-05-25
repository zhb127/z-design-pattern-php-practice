<?php

/**
 * 访问者模式
 *
 * 定义：表示一个作用于某对象结构中的各元素的操作。它使你可以在不改变各元素的类的前提下定义作用于这些元素的新操作。
 */
namespace Visitor;

include dirname(__DIR__) . '/autoload.php';

$o = new ObjectStructure();
$o->attach(new ConcreteElementA());
$o->attach(new ConcreteElementB());

$v1 = new ConcreteVisitor1();
$v2 = new ConcreteVisitor2();

$o->accept($v1);
$o->accept($v2);
<?php

/**
 * 职责链模式
 *
 * 定义：使多个对象都有机会处理请求，从而避免请求的发送者和接收者之间的耦合关系。将这个对象连成一条链，并沿着这条链传递该请求，直到有一个对象处理它为止。
 */
namespace ChainOfResponsibility;

include dirname(__DIR__) . '/autoload.php';

$h1 = new ConcreteHandler1();
$h2 = new ConcreteHandler2();
$h3 = new ConcreteHandler3();

$h1->setSuccessor($h2);
$h2->setSuccessor($h3);

$requests = array(2, 5, 14, 22, 18, 3, 27, 20);

foreach ($requests as $v) {
    $h1->handleRequest($v);
}
<?php

/**
 * 享元模式
 *
 * 定义：运用共享技术有效地支持大量细粒度的对象。
 */
namespace Flyweight;

include dirname(__DIR__) . '/autoload.php';

$extrinsicstate = 22;

$f = new FlyweightFactory();

$fx = $f->getFlyweight('X');
$fx->operation(--$extrinsicstate);

$fy = $f->getFlyweight('Y');
$fy->operation(--$extrinsicstate);

$fz = $f->getFlyweight('Z');
$fz->operation(--$extrinsicstate);

$uf = new UnsharedConcreteFlyweight();
$uf->operation(--$extrinsicstate);


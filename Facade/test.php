<?php

/**
 * 外观模式
 *
 * 定义：为子系统中的一组接口提供一个一致的界面，此模式定义了一个高层接口，这个接口使得这一子系统更加容易使用。
 *
 * 说明：把系统中的类调用委托给一个单独的类，对外隐藏调用逻辑的复杂性。
 */

namespace Facade;

include dirname(__DIR__) . '/autoload.php';

$sf = new SwtichFacade();
$sf->on();
$sf->off();
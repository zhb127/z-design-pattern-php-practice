<?php

/**
 * 虚拟代理模式
 *
 * 定义：按需创建真实实例对象
 */
namespace Proxy\Virtual;

include dirname(dirname(__DIR__)) . '/autoload.php';

$proxy = new Proxy();
$proxy->request();
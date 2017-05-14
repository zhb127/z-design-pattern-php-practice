<?php

/**
 * 普通代理模式
 *
 * 定义：为其他对象提供一种代理以控制对这个对象的访问。
 */
namespace Proxy\Normal;

include dirname(dirname(__DIR__)) . '/autoload.php';

$proxy = new Proxy();
$proxy->request();
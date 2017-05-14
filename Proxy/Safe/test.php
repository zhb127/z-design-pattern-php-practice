<?php

/**
 * 安全代理
 *
 * 定义：用来控制真实对象访问时的权限
 */
namespace Proxy\Safe;

include dirname(dirname(__DIR__)) . '/autoload.php';

$permisson = new PermissonProxy();
$permisson->modifyUserInfo();
$permisson->viewNote();
$permisson->publishNote();
$permisson->modifyNote();

$permisson->setLevel(2);
$permisson->modifyUserInfo();
$permisson->viewNote();
$permisson->publishNote();
$permisson->modifyNote();
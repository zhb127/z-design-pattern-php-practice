<?php

/**
 * 备忘录模式
 *
 * 定义：在不破坏封装性的前提下，捕获一个对象的内部状态，并在该对象之外保存这个状态。这样以后就可以将该对象恢复到原先保存的状态。
 */

namespace Memoto;

include dirname(__DIR__) . '/autoload.php';

$c = new Caretaker();

$uie = new UserInfoEditor('张三', 'pwd123456', '139333444422');
$uie->show();

$c->setMemoto($uie->backup());

$uie->changePassword('forgetpwd');
$uie->show();

$uie->restore($c->getMemoto());
$uie->show();
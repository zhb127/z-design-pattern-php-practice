<?php

/**
 * 装饰模式
 *
 * 定义：装饰模式把每个要装饰的功能放在单独的类中，并让这个类包装它所要装饰的对象，因此，当需要执行特殊行为时，就可以在运行时根据需要有选择地、按顺序地使用装饰功能包装对象。
 *
 * 优点：把类中的装饰功能从类中搬移去除，这样可以简化原有的类。有效地把类的核心职责和装饰功能区分开了。而且可以去除相关类中重复的装饰逻辑。
 */

namespace Decorator;

include dirname(__DIR__) . '/autoload.php';

$xc = new Person('小菜');

echo '第一种装饰：', PHP_EOL;

$pqx = new Sneakers();
$pqx->decorate($xc);

$dkk = new BigTrouser();
$dkk->decorate($pqx);

$dtx = new TShits();
$dtx->decorate($dkk);

$dtx->show();


echo '第二种装饰：', PHP_EOL;

$px = new LeatherShoes();
$px->decorate($xc);

$ld = new Tie();
$ld->decorate($px);

$xz = new Suit();
$xz->decorate($ld);

$xz->show();



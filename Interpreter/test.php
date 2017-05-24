<?php

/**
 * 解释器模式
 *
 * 定义：给定一个语言，定义它的文法一种表示，并定义一个解释器，这个解释器使用该表达式来解释语言中的句子。
 */
namespace Interpreter;

include dirname(__DIR__) . '/autoload.php';

$context = new Context();

$list = array();
$list[] = new TerminalExpression();
$list[] = new NonteminalExpression();
$list[] = new TerminalExpression();
$list[] = new TerminalExpression();

foreach ($list as $item) {
    $item->interpret($context);
}
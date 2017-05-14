<?php

/**
 * 策略模式
 *
 * 定义：定义一组算法，将每个算法都封装起来，并使它们之间可以互换。此模式让算法的变化，不会影响到使用算法的客户。
 */
namespace Strategy;

include dirname(__DIR__) . '/autoload.php';

$types = array(
    'normal' => '正常收费：',
    'rebate' => '八折优惠：',
    'return' => '满三百返一百：'
);

foreach ($types as $k => $v) {
    $cc = new CashContext($k);
    echo $v, $cc->getResult(300), PHP_EOL;
}


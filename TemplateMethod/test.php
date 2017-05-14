<?php

/**
 * 模板方法模式
 *
 * 定义：定义一个操作中算法的框架，而将一些步骤延迟到子类中，使得子类可以不改变算法的结构即可重定义该算法中的某些特定步骤。
 *
 * 说明：模板方法模式是通过把不变行为搬到父类，去除子类中的重复代码来提现它的优势。模板方法模式就是提供一个很好的代码复用平台。
 */

namespace TemplateMethod;

include dirname(__DIR__) . '/autoload.php';

$nums = array(5, 8, 1, 3, 9, 2);
$sortAsc = new SortAsc();
$sortAsc->showSortResult($nums);
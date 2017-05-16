<?php

/**
 * 组合模式
 *
 * 定义：将对象组合成树形结构以表示‘部分-整体’的层次结构。组合模式使得用户对单个对象和组合对象的使用具有一致性。
 *
 * 说明：需求中体现部分与整体层次的结构时，希望用户可以忽略组合对象与单个对象的不同，统一地使用组合结构中的所有对象时，就应该考虑使用组合模式了。
 */
namespace Composite;

include dirname(__DIR__) . '/autoload.php';

$root = new Folder('root');
$usr = new Folder('usr');
$opt = new Folder('opt');
$root->add($usr);
$root->add($opt);

$test = new File('test.php');
$usr->add($test);

$root->display();
<?php

namespace Bridge\Sample;

include dirname(dirname(__DIR__)) . '/autoload.php';

$penSmall = new PenSmall();
$penMiddle = new PenMiddle();
$penBig = new PenBig();

$colorBule = new ColorBlue();
$colorRed = new ColorRed();

$penSmall->setColor($colorBule);
$penSmall->draw('桥接模式1');

$penMiddle->setColor($colorBule);
$penMiddle->draw('桥接模式2');

$penBig->setColor($colorBule);
$penBig->draw('桥接模式3');

$penSmall->setColor($colorRed);
$penSmall->draw('桥接模式1');

$penMiddle->setColor($colorRed);
$penMiddle->draw('桥接模式2');

$penBig->setColor($colorRed);
$penBig->draw('桥接模式3');
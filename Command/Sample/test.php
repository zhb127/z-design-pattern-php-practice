<?php

namespace Command\Sample;

include dirname(dirname(__DIR__)) . '/autoload.php';

$tv = new TV();
$commandChange = new CommandChange($tv);
$commandClose = new CommandClose($tv);
$commandOpen = new CommandOpen($tv);

$controller = new Controller();

$controller->addCommand($commandOpen);
$controller->addCommand($commandChange);
$controller->addCommand($commandClose);
$controller->execute();

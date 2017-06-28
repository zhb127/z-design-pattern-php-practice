<?php

namespace DesignPatterns\Creational\SimpleFactory\Tests;

use DesignPatterns\Creational\SimpleFactory\TVFactory;
use DesignPatterns\Creational\SimpleFactory\HaierTV;
use DesignPatterns\Creational\SimpleFactory\HisenseTV;
use PHPUnit\Framework\TestCase;

class TVFactoryTest extends TestCase
{
    public function testProduceHaierTV()
    {
        $tv = TVFactory::produceTV('Haier');
        $this->assertInstanceOf(HaierTV::class, $tv);
    }

    public function testProduceHisenseTV()
    {
        $tv = TVFactory::produceTV('Hisense');
        $this->assertInstanceOf(HisenseTV::class, $tv);
    }
}
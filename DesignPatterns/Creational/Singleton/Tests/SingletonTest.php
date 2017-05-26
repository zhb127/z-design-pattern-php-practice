<?php

namespace DesignPatterns\Creational\Singleton\Tests;

use DesignPatterns\Creational\Singleton\Signleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{

    public function testUniqueness()
    {
        $firstCall = Signleton::getInstance();
        $secondCall = Signleton::getInstance();

        $this->assertInstanceOf(Signleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}
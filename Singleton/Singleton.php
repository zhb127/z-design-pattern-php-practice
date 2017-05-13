<?php

namespace Singleton;

/**
 * 单例类
 */
class Singleton
{

    private static $_instance;

    private function __construct()
    {
    }

    public function __clone()
    {
        throw new \Exception('clone is forbidden');
    }

    public static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
}
<?php

namespace DesignPatterns\Creational\SimpleFactory;

class TVFactory
{
    public static function produceTV($brand)
    {
        switch ($brand) {
            case 'Haier':
                return new HaierTv();
                break;
            case 'Hisense':
                return new HisenseTv();
                break;
            default:
                return null;
        }
    }
}
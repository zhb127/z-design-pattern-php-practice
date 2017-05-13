<?php

namespace FactorySimple;

class TVFactory
{
    public static function produceTV($brand)
    {
        switch ($brand) {
            case 'Haier':
                echo '电视机工厂生产海尔电视机。', PHP_EOL;
                return new HaierTv();
                break;
            case 'Hisense':
                echo '电视机工厂生产海信电视机。', PHP_EOL;
                return new HisenseTv();
                break;
            default:
                throw new \Exception("对不起，暂不能生产 {$brand} 品牌电视机。" . PHP_EOL);
        }
    }
}
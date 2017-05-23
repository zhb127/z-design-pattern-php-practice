<?php

namespace ChainOfResponsibility;

/**
 * Class ConcreteHandler3
 * @package ChainOfResponsibility
 */
class ConcreteHandler3 extends Handler
{
    public function handleRequest($request)
    {
        if ($request >= 20 && $request < 30) {
            echo "处理器3，处理请求值{$request}\n";
        } elseif ($this->successor) {
            $this->successor->handleRequest($request);
        }
    }
}
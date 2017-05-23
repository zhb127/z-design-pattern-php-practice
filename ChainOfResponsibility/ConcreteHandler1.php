<?php

namespace ChainOfResponsibility;

/**
 * Class ConcreteHandler1
 * @package ChainOfResponsibility
 */
class ConcreteHandler1 extends Handler
{
    public function handleRequest($request)
    {
        if ($request >= 0 && $request < 10) {
            echo "处理器1，处理请求值{$request}\n";
        } elseif ($this->successor) {
            $this->successor->handleRequest($request);
        }
    }
}
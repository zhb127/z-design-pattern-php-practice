<?php

namespace ChainOfResponsibility;

/**
 * Class ConcreteHandler2
 * @package ChainOfResponsibility
 */
class ConcreteHandler2 extends Handler
{
    public function handleRequest($request)
    {
        if ($request >= 10 && $request < 20) {
            echo "处理器2，处理请求值{$request}\n";
        } elseif ($this->successor) {
            $this->successor->handleRequest($request);
        }
    }
}
<?php

namespace Proxy\Virtual;

class Proxy extends SubjectAbstract
{
    private $_subject;

    public function request()
    {
        // 虚拟代理是指按需实例化真实类
        if (!$this->_subject) {
            $this->_subject = new SubjectReal();
        }

        $this->preRequest();
        $this->_subject->request();
        $this->postRequest();
    }

    public function preRequest()
    {
        echo '发送请求之前。', PHP_EOL;
    }

    public function postRequest()
    {
        echo '发送请求之后。', PHP_EOL;
    }

}
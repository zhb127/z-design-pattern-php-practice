<?php

namespace Proxy\Normal;

class Proxy extends SubjectAbstract
{
    private $_subject;

    public function __construct()
    {
        $this->_subject = new SubjectReal();
    }

    public function request()
    {
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
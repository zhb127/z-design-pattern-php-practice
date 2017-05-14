<?php

namespace Proxy\Normal;

class SubjectReal extends SubjectAbstract
{
    public function request()
    {
        echo '真实的请求。', PHP_EOL;
    }

}
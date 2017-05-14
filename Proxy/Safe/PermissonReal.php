<?php

namespace Proxy\Safe;

class PermissonReal implements IPermisson
{
    public function modifyUserInfo()
    {
        echo '修改用户信息。', PHP_EOL;
    }

    public function viewNote()
    {
        echo '查看帖子内容。', PHP_EOL;
    }

    public function publishNote()
    {
        echo '发布新帖。', PHP_EOL;
    }

    public function modifyNote()
    {
        echo '修改帖子内容。', PHP_EOL;
    }

    public function setLevel($level)
    {

    }
}
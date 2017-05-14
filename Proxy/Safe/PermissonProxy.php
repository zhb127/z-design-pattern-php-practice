<?php

namespace Proxy\Safe;

class PermissonProxy implements IPermisson
{
    private $_permisson;

    private $_level;

    public function __construct()
    {
        $this->_permisson = new PermissonReal();
    }

    public function modifyUserInfo()
    {
        if (0 == $this->_level) {
            echo '对不起，你没有该权限！', PHP_EOL;
        } else {
            $this->_permisson->modifyUserInfo();
        }
    }

    public function viewNote()
    {
        $this->_permisson->viewNote();
    }

    public function publishNote()
    {
        if ($this->_level < 2) {
            echo '对不起，你没有该权限！', PHP_EOL;
        } else {
            $this->_permisson->publishNote();
        }
    }

    public function modifyNote()
    {
        if ($this->_level < 2) {
            echo '对不起，你没有该权限！', PHP_EOL;
        } else {
            $this->_permisson->modifyNote();
        }
    }

    public function setLevel($level)
    {
        $this->_level = $level;
    }
}
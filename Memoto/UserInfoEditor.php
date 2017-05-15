<?php

namespace Memoto;

class UserInfoEditor
{

    public $account;

    public $password;

    public $tel;

    public function __construct($account, $password, $tel)
    {
        echo '初始化信息！', PHP_EOL;
        $this->account = $account;
        $this->password = $password;
        $this->tel = $tel;
    }

    public function changePassword($password)
    {
        echo '修改密码！', PHP_EOL;
        $this->password = $password;
    }

    public function backup()
    {
        echo '备份当前信息...', PHP_EOL;
        return new Memoto($this->account, $this->password, $this->tel);
    }

    public function restore(Memoto $memoto)
    {
        echo '还原为上一次备份的信息！', PHP_EOL;
        $this->account = $memoto->account;
        $this->password = $memoto->password;
        $this->tel = $memoto->tel;
    }

    public function show()
    {
        echo '账号：', $this->account, PHP_EOL;
        echo '密码：', $this->password, PHP_EOL;
        echo '电话：', $this->tel, PHP_EOL;
    }
}
<?php

namespace Memoto;

class Memoto
{

    public $account;

    public $password;

    public $tel;

    public function __construct($account, $password, $tel)
    {
        $this->account = $account;
        $this->password = $password;
        $this->tel = $tel;
    }
}
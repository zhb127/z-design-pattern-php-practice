<?php

namespace Proxy\Safe;

interface IPermisson
{

    public function modifyUserInfo();

    public function viewNote();

    public function publishNote();

    public function modifyNote();

    public function setLevel($level);
}
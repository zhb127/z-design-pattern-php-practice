<?php

namespace Memoto;

class Caretaker
{
    private $_memoto;

    public function getMemoto()
    {
        return $this->_memoto;
    }

    public function setMemoto(Memoto $memoto)
    {
        $this->_memoto = $memoto;
    }
}
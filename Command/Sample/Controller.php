<?php

namespace Command\Sample;

class Controller
{

    private $_commands;

    public function addCommand($command)
    {
        $this->_commands[] = $command;
    }

    public function execute()
    {
        foreach ($this->_commands as $command) {
            $command->execute();
        }
    }
}
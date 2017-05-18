<?php

namespace Command;

abstract class Command
{

    protected $_receiver;

    public function __construct($receiver)
    {
        $this->_receiver = $receiver;
    }

    abstract public function execute();
}

class ConcreteCommand extends Command
{

    public function execute()
    {
        $this->_receiver->action();
    }
}

class Invoker
{

    private $_command;

    public function setCommand($command)
    {
        $this->_command = $command;
    }

    public function executeCommand()
    {
        $this->_command->execute();
    }
}

class Receiver
{
    public function action()
    {
        echo '执行请求', PHP_EOL;
    }
}

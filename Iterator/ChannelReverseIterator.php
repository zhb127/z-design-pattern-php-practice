<?php

namespace Iterator;

class ChannelReverseIterator implements IIterator
{

    private $_channels;

    private $_cursor;

    public function __construct($channels)
    {
        $this->_channels = $channels;
        $this->rewind();
    }

    public function next()
    {
        $this->_cursor--;
    }

    public function current()
    {
        return $this->_channels[$this->_cursor];
    }

    public function key()
    {
        return $this->_cursor;
    }

    public function valid()
    {
        return isset($this->_channels[$this->_cursor]);
    }

    public function rewind()
    {
        $this->_cursor = count($this->_channels) - 1;
    }
}
<?php

namespace Iterator;

interface IIterator
{
    /**
     * 移动下标到下一个元素
     */
    public function next();

    /**
     * 返回当前元素
     */
    public function current();

    /**
     * 返回当前元素下标
     */
    public function key();

    /**
     * 检查当前下标是否有效
     */
    public function valid();

    /**
     * 移动下标到第一个元素
     */
    public function rewind();
}
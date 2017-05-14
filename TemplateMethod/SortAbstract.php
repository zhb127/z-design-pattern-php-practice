<?php

namespace TemplateMethod;

abstract class SortAbstract
{

    protected abstract function sort(& $nums);

    public function showSortResult($nums)
    {
        $this->sort($nums);

        echo '排序结果：';

        for ($i = 0; $i < count($nums); $i++) {
            echo $nums[$i], ' ';
        }

        echo PHP_EOL;
    }
}
<?php

namespace TemplateMethod;

class SortAsc extends SortAbstract
{

    protected function sort(& $nums)
    {
        $numsCount = count($nums);
        for ($i = 0; $i < $numsCount; $i++) {
            for ($j = 0; $j < $numsCount; $j++) {
                if ($nums[$i] < $nums[$j]) {
                    $tmp = $nums[$j];
                    $nums[$j] = $nums[$i];
                    $nums[$i] = $tmp;
                }
            }
        }
    }
}
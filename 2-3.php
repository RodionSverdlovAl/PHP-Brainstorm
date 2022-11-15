<?php
// В массиве А(N) подсчитать количество различных элементов.

function task($A){
    $count_el=0;
    for ($i = 0; $i < count($A); $i++)
    {
        $k=0;
        for($j = $i+1; $j < count($A); $j++){
            if ($A[$i]==$A[$j]){
                $k=1;
                break;
            }
        }
        if ($k==0)
            $count_el++;
    }
    return $count_el;

}

$arr = [2,6,4,3,-3,2,-7,11,7,2,3,123,321,321,321,125,321,2,-654];

echo task($arr);

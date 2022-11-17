<?php

function sortRow($row) : array
{
    $size = count($row);

    for ($i = 0; $i < $size; $i++) {
        for ($j = $size - 1; $j > $i; $j--) {
            if ($row[$j - 1] < $row[$j]) {
                $tmp = $row[$j - 1];
                $row[$j - 1] = $row[$j];
                $row[$j] = $tmp;
            }
        }
    }

    return $row;
}

function insertItemInRows($arr, $item) : array
{
    $countOfRows = count($arr);

    for ($row = 0; $row < $countOfRows; $row++) {
        $arr[$row][] = $item;
        $arr[$row] = sortRow($arr[$row]);
    }

    return $arr;
}

$arr = [
    [3,5,7,4,12,5,1],
    [5,10,2,0,4,15,0],
    [12,5,1,11,1,10,1],
    [6,10,0,-21,1,25,0],
    [60,15,0,1,20,55,0]
];



echo "<pre>";
print_r(insertItemInRows($arr,8));
echo "</pre>";

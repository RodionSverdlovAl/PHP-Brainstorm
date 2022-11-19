<?php
// В матрице А(N,N) найти первую строку, не содержащую отрицательных элементов, и умножить
//ее как вектор на матрицу А

function findFirstRow ($matrix) : array
{
    $size = count($matrix);

    for ($row = 0; $row < $size; $row++) {
        $check = true;
        for ($col = 0; $col < $size; $col++) {
            if ($matrix[$row][$col] < 0) {
                $check = false;
            }
        }
        if ($check) {
            return $matrix[$row];
        }
    }
    return [];
}

function umnozhenieArrayNaVector($matrix, $vector) : array
{
    $size = count($matrix);
    for ($row = 0; $row < $size; $row++) {
        for ($col = 0; $col < $size; $col++) {
            $matrix[$row][$col] *= $vector[$col];
        }
        $result = [];
        for ($col=0; $col < $size; $col++) {
            $result[] += $matrix[$row][$col];
        }
    }
    return $result;
}


$arr = [
    [3,5,-7,4,12],
    [2,-5,13,29,31],
    [12,5,1,11,-1],
    [6,10,0,21,1],
    [-60,15,0,1,20]
];


echo "<pre>";
$vector = findFirstRow($arr);
print_r(umnozhenieArrayNaVector($arr,$vector));
echo "</pre>";

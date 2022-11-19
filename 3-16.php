<?php
//В массиве А(N,M) расположить строки по убыванию значений максимальных элементов строк.


function swapRows ($matrix) : void
{
    $countOfCols = count($matrix[0]);
    $countOfRows = count($matrix);
    $maxElements = [];

    for ($row = 0; $row < $countOfRows; $row++) {
        $max = $matrix[$row][0];
        for ($col = 0; $col < $countOfCols; $col++) {
            if ($matrix[$row][$col] > $max) {
                $max = $matrix[$row][$col];
            }
        }
        $maxElements[] = $max;
    }

    for ($i = 0; $i < $countOfRows-1; ++$i) {
        $max = $i;
        for ($j = $i+1; $j < $countOfRows; ++$j) {
            if ($maxElements[$j] > $maxElements[$max]) {
                $max = $j;
            }
        }
        if ($max != $i) {
            $maxElements[$max] = $maxElements[$i];
            $tmp = $matrix[$max];
            $matrix[$max] = $matrix[$i];
            $matrix[$i] = $tmp;
        }
    }
    echo "<pre>";
    print_r($matrix);
    echo "</pre>";

}



$arr = [
    [-3, 15, 7, 15, 8, 15, -6],
    [22, 1, 3, -6, 3, 22, 4],
    [1, -2, 1, 16, 1, 5, 16],
    [26, 9, 26, 1, -4, 5, 1],
    [6, 23, -8, 4, 23, 7, 9]
];

swapRows($arr);

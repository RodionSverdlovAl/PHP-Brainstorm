<?php
//В массиве А(N,М) строку с максимальным количеством знакочередующихся элементов
//переставить на первое место.

function swapRow ($matrix) : void
{
    $countOfCols = count($matrix[0]);
    $countOfRows = count($matrix);
    $countInRows = [];
  
    for ($row = 0; $row < $countOfRows; $row++) {
        $count = 0;
        for ($col = 0; $col < $countOfCols-1; $col++) {
            if ($matrix[$row][$col] * $matrix[$row][$col+1] < 0) {
                $count++;
            }
        }
        $countInRows[] = $count;
    }

    $max = $countInRows[0];
    $colIndex = 0;

    for ($i = 0; $i < count($countInRows); ++$i) {
        if ($countInRows[$i] > $max) {
            $max = $countInRows[$i];
            $colIndex = $i;
        }
    }

    $tmp = $matrix[$colIndex];
    $matrix[$colIndex] = $matrix[0];
    $matrix[0] = $tmp;

    echo "<pre>";
    print_r($matrix);
    echo "</pre>";
}


$arr = [
    [-3, 5, 7, 4, 8, -4],
    [2, 5, 3, -6, 3, 2],
    [1, -2, 1, 6, 1, 8],
    [-6, 9, -4, 1, -4, 5],
    [6, 3, -8, 1, 2, 7]
];

swapRow($arr);

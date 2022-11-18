<?php
//Известно, что в каждой строке и каждом столбце массива А(N,N) имеется единственный
//отрицательный элемент. Переставить строки массива так, чтобы отрицательные элементы
//находились на главной диагонали


function swapMaxElementsInDiagonal($matrix) : void
{
    $matrixSize = count($matrix);

    for ($row = 0; $row < $matrixSize; $row++) {
        for ($col = 0; $col < $matrixSize; $col++) {
            if ($matrix[$row][$col] < 0) {
                $tmp = $matrix[$row][$row];
                $matrix[$row][$row] = $matrix[$row][$col];
                $matrix[$row][$col] = $tmp;
            }
        }
    }

    echo "<pre>";
    print_r($matrix);
    echo "</pre>";
}


$arr = [
    [-3, 5, 7, 4, 8],
    [2, 5, 3, -6, 3],
    [1, -2, 1, 6, 1],
    [6, 9, 0, 1, -4],
    [6, 3,-8, 1, 2]
];

swapMaxElementsInDiagonal($arr);

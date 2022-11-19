<?php
//В каждой строке массива А(N,М) удалить все четные положительные элементы, стоящие
//между первым и последним максимальными элементами.

function deleteElementsInMatrix ($matrix) : void
{
    $countOfCols = count($matrix[0]);
    $countOfRows = count($matrix);
    $firstMaxElementIndexes = [];

    for ($row = 0; $row < $countOfRows; $row++) {
        $max = $matrix[$row][0];
        $flag = false; // флаг нужен для того если первый эллемент максимальный и тогда не входит в иф
        for ($col = 0; $col < $countOfCols; $col++) {
            if ($matrix[$row][$col] > $max) {
                $max = $matrix[$row][$col];
                $firstMaxElementIndexes[] = $col;
                $flag = true;
            }
        }
        if (!$flag) {
            $firstMaxElementIndexes[] = 0;
        }
    }

    $lastMaxElementIndexes = [];
    
    for ($row = 0; $row < $countOfRows; $row++) {
        $max = $matrix[$row][$countOfCols - 1];
        $flag = false; // флаг нужен для того если первый эллемент максимальный и тогда не входит в иф
        for ($col = $countOfCols - 1; $col >= 0; $col--) {
            if ($matrix[$row][$col] > $max) {
                $max = $matrix[$row][$col];
                $lastMaxElementIndexes[$row] = $col;
                $flag = true;
            }
        }
        if (!$flag) {
            $lastMaxElementIndexes[$row] = $countOfCols-1;
        }
    }

    for ($row = 0; $row < $countOfRows; $row++) {
        for ($col = $firstMaxElementIndexes[$row] + 1; $col < $lastMaxElementIndexes[$row]; $col ++) {
            if ($matrix[$row][$col] > 0 && $matrix[$row][$col] % 2 == 0) {
                unset($matrix[$row][$col]);
            }
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

deleteElementsInMatrix($arr);

<?php
//В массив А(N,М) после первого отрицательного элемента каждого столбца вставить число,
//равное минимальному элементу этого столбца. Если столбец не содержит отрицательных
//элементов, то вставить это число перед первым элементом столбца.

function findMinimalElementInColumn($matrix, $col)
{
    $min  = $matrix[0][$col];
    for ($row = 0; $row < count($matrix); $row++) {
        if ($matrix[$row][$col] < $min) {
            $min = $matrix[$row][$col];
        }
    }
    return $min;
}

function insertElementInMatrix($matrix) : void
{
    $countOfCols = count($matrix[0]);
    $countOfRows = count($matrix);
    $newArray = [];
    for ($col =0; $col < $countOfCols; $col++) {
        for ($row = 0; $row < $countOfRows; $row++) {
            $newArray[$col][$row] = $matrix[$row][$col];
        }
    }

    for ($col = 0; $col < $countOfCols; $col++) {
        $maxElement[] = findMinimalElementInColumn($matrix, $col);
    }

    for ($i =0; $i < count($newArray); $i++) {
        for ($j = 0; $j < count($newArray[0]); $j++) {
            $flag = true;
            if ($newArray[$i][$j] < 0) {
                array_splice( $newArray[$i], $j+1, 0, $maxElement[$i]);
                $flag = false;
                break;
            }
        }
        if ($flag) {
            array_splice( $newArray[$i], count($newArray[0]), 0, $maxElement[$i]);
        }
    }

    $resultArray =[];
    for ($i = 0; $i < count($newArray); $i++) {
        for ($j = 0; $j < count($newArray[0]); $j++) {
            $resultArray[$j][$i] = $newArray[$i][$j];
        }
    }

    print_r($resultArray);
}

$arr = [
    [3,    5,  7,  -4,  -12,  5],
    [2,   -5, 13,  29,   31,  3],
    [-12,  5, -1,  11,    1,  8],
    [6,   10, -0, -21,    1,  2],
    [-60,-15,  0,   1,   20, 11]
];



echo "<pre>";
insertElementInMatrix($arr);
echo "</pre>";

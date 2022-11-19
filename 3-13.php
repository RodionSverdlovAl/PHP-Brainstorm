<?php
// В массив А(N,М) вставить одномерный массив В(N), расположив его перед последним
//столбцом, содержащим нулевой элемент. Если такого столбца не окажется, то вставить массив
//В(N) после последнего столбца

// 1. определить индексы столбцов где присутсвует нулевой эллемент

function findColsWhereNullElement ($matrix) : int
{
    $countOfCols = count($matrix[0]);
    $countOfRows = count($matrix);
    $index = $countOfCols-1;

    for ($col = 0; $col < $countOfCols; $col++) {
        $flag = false;
        for ($row = 0; $row < $countOfRows; $row++) {
            if ($matrix[$row][$col] == 0) {
                $flag = true;
            }
        }
        if ($flag) { 
            $index = $col;
        }
    }
    return $index;
}

// 2. вставить в этот массив столбец в зависимости от условия

function insertColumn ($matrix, $insertArray) : void
{
    $countOfRows = count($matrix);
    $columnNumber  = findColsWhereNullElement($matrix);

    for($row = 0; $row < $countOfRows; $row++) {
        array_splice( $matrix[$row], $columnNumber+1, 0, $insertArray[$row]);
    }

    echo "<pre>";
    print_r($matrix);
    echo "</pre>";
}

$insertArray =
    [
        1,
        4,
        8,
        2,
        5
    ];

$matrix = [
    [3,5,7,4,2,5],
    [2,5,3,0,1,3],
    [2,0,1,1,1,8],
    [6,1,0,1,1,2],
    [6,5,0,1,2,1]
];

insertColumn($matrix, $insertArray);

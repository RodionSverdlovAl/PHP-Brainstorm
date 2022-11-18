<?php
//В массиве А(N,М) поменять местами столбцы, содержащие максимальный и минимальный
//элементы.

function swapCols ($matrix) : void
{
    $countOfCols = count($matrix[0]);
    $countOfRows = count($matrix);
    $maxElement = $matrix[0][0];
    $minElement = $matrix[0][0];
    $colOfMaxElement = 0;
    $colOfMinElement = 0;

    for ($row = 0; $row < $countOfRows; $row++) {
        for ($col = 0; $col < $countOfCols; $col++) {
            if ($matrix[$row][$col] > $maxElement) {
                $maxElement = $matrix[$row][$col];
                $colOfMaxElement = $col;
            }
            if ($matrix[$row][$col] < $minElement) {
                $minElement = $matrix[$row][$col];
                $colOfMinElement = $col;
            }
        }
    }
    
    echo "min element column: ". $colOfMinElement;
    echo "</br>";
    echo "max element column: ". $colOfMaxElement;
    
    for ($row = 0; $row < $countOfRows; $row++) {
         $tmp =  $matrix[$row][$colOfMaxElement];
         $matrix[$row][$colOfMaxElement] = $matrix[$row][$colOfMinElement];
         $matrix[$row][$colOfMinElement] = $tmp;
    }

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

swapCols($arr);

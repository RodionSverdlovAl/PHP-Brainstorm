<?php
//В массиве А(N,N) поменять местами максимальные элементы нижнего и верхнего
//треугольников относительно главной диагонали.



function swapMaxElementsOfMatrixTriangle($matrix) : void
{
    $matrixSize = count($matrix);

    $maxElementRowIndexUp = 0;
    $maxElementColIndexUp = 0;
    $maxElementUp = $matrix[0][1];

    $maxElementRowIndexDown = 0;
    $maxElementColIndexDown = 0;
    $maxElementDown = $matrix[1][0];

    for ($row = 0; $row < $matrixSize; $row++) {
        for ($col = 0; $col < $matrixSize; $col++) {
            if ($row < $col) {
                if ($matrix[$row][$col] > $maxElementUp) {
                    $maxElementUp = $matrix[$row][$col];
                    $maxElementRowIndexUp = $row;
                    $maxElementColIndexUp = $col;
                }
            }
            if ($row > $col) {
                if ($matrix[$row][$col] > $maxElementDown) {
                    $maxElementDown = $matrix[$row][$col];
                    $maxElementRowIndexDown = $row;
                    $maxElementColIndexDown = $col;
                }
            }
        }
    }

    echo "indexes of max element up triangle: "; echo $maxElementRowIndexUp; echo " "; echo $maxElementColIndexUp;
    echo "</br>";
    echo "indexes of max element down triangle: "; echo $maxElementRowIndexDown; echo " "; echo $maxElementColIndexDown;
    echo "</br>";

    $tmp = $matrix[$maxElementRowIndexUp][$maxElementColIndexUp];
    $matrix[$maxElementRowIndexUp][$maxElementColIndexUp] = $matrix[$maxElementRowIndexDown][$maxElementColIndexDown];
    $matrix[$maxElementRowIndexDown][$maxElementColIndexDown] = $tmp;

    echo "<pre>";
    print_r($matrix);
    echo "</pre>";
}


$arr = [
       [3,   5, 7, 4, 8],
    [2,    5,   3, 6, 3],
    [1, 2,    1,   6, 1],
    [6, 9, 0,    1,   4],
    [6, 3, 0, 1,    2]
];

swapMaxElementsOfMatrixTriangle($arr);

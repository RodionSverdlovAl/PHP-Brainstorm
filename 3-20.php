<?php

//В массиве А(N,M) переставить строки так, чтобы строка с максимальной суммой элементов
//стала первой строкой, а остальные строки расположить в порядке возрастания элементов
//первого столбца

function swapRows ($matrix) : array
{
    $countOfCols = count($matrix[0]);
    $countOfRows = count($matrix);
    $sumArray = [];
    for ($row = 0; $row < $countOfRows; $row++) {
        $sum = 0;
        for ($col = 0; $col < $countOfCols; $col++) {
            $sum += $matrix[$row][$col];
        }
        $sumArray[] = $sum;
    }
    $max = $sumArray[0];
    $maxIndex = 0;
    for ($i =0; $i < count($sumArray); $i++) {
        if ($sumArray[$i] > $max) {
            $max = $sumArray[$i];
            $maxIndex = $i;
        }
    }

    // переносим максимальную строку в начало
    $tmp = $matrix[$maxIndex];
    $matrix[$maxIndex] = $matrix[0];
    $matrix[0] = $tmp;

    for ($i = 1; $i < count($matrix); $i++) {
        for ($j = 1; $j < count($matrix) - 1; $j++) {
           if ($matrix[$j][0] > $matrix[$j + 1][0]) {
               $tmp = $matrix[$j];
               $matrix[$j] = $matrix[$j + 1];
               $matrix[$j + 1] = $tmp;
           }
        }
    }

    return $matrix;
}

$matrix = [                 // переносим строку с максимальным эллементов в начало
    [3,5,9,4,2,6],  //29           //[2,0,1,12,14,6],
    [2,5,3,0,1,3],  // 14           //[3,5,9,4,2,6],   // далее обходим массив по строкам начиная с 1 а не 0
    [2,0,1,12,14,6], // 35          //[2,5,3,0,1,3],
    [6,1,0,3,9,2],   //21          //[6,1,0,3,9,2],
    [6,5,0,1,3,1]    // 16          //[6,5,0,1,3,1]
];


echo "<pre>";
print_r(swapRows($matrix));
echo "</pre>";

<?php
//В массиве А(N,М) столбец с минимальным количеством нечетных элементов переставить на
//последнее место.

function swapRowWithMinimalCountOddElements($matrix) : void
{
    $matrixSize = count($matrix);
    $countNotOddElementsArr = [];
    
    for ($col = 0; $col < $matrixSize; $col++) {
        $countNotOddElements = 0;
        for ($row = 0; $row < $matrixSize; $row++) {
            if ($matrix[$row][$col] % 2 != 0) {
                $countNotOddElements++;
            }
        }
        $countNotOddElementsArr[] = $countNotOddElements;
    }
    
    $max = $countNotOddElementsArr[0];
    $colIndex =0;
    
    for ($i = 0; $i < count($countNotOddElementsArr); ++$i) {
        if ($countNotOddElementsArr[$i] > $max) {
            $max = $countNotOddElementsArr[$i];
            $colIndex = $i;
        }
    }

    for ($row = 0; $row < $matrixSize; $row++) {
        $tmp = $matrix[$row][$colIndex];
        $matrix[$row][$colIndex] = $matrix[$row][$matrixSize - 1];
        $matrix[$row][$matrixSize - 1] = $tmp;
    }

    echo "<pre>";
    print_r($matrix);
    echo "</pre>";

}


$arr = [
    [-3, 5, 7, 4, 8],
    [2, 5, 3, -6, 3],
    [1, -2, 1, 6, 1], // этот роу нужно поменять местами с той строкой где этот минимальный колонка
    [6, 9, 0, 1, -4],
    [6, 3,-8, 1, 2]
];

swapRowWithMinimalCountOddElements($arr);

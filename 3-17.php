<?php
//В массиве А(N,M) элементы, кратные заданному числу р, переместить в начало строк и
//расположить их в порядке возрастания.

function moveElements ($matrix, $p) : void
{
    $countOfCols = count($matrix[0]);
    $countOfRows = count($matrix);

    for ($row = 0; $row < $countOfRows; $row++) {
        $pArray =[];
        $tmpArray = [];
        for ($col = 0; $col< $countOfCols; $col++) {
            if ($matrix[$row][$col] % $p == 0 &&$matrix[$row][$col] != 0) {
               $pArray[] = $matrix[$row][$col];
            } else {
                $tmpArray[] = $matrix[$row][$col];
            }
        }
        for ($i = 0; $i < count($pArray); $i++) {
            for ($j = 0; $j <count($pArray) - 1; $j++) {
                if ($pArray[$j] > $pArray[$j + 1]) {
                    $tmp = $pArray[$j];
                    $pArray[$j] = $pArray[$j + 1];
                    $pArray[$j + 1] = $tmp;
                }
            }
        }
        $resultArray= [];
        for ($i = 0; $i < count($pArray); $i++) {
            $resultArray[] = $pArray[$i];
        }
        for ($i = 0; $i < count($tmpArray); $i++) {
            $resultArray[] = $tmpArray[$i];
        }
        $matrix[$row] = $resultArray;
    }

    echo "<pre>";
    print_r($matrix);
    echo "</pre>";
}


// 1. берем строку и делим ее на два массива
// первый это кратные числа второй все остальное
// массив с кратными числами сортируем
// и к нему добавляем оставшийся массив
// по итогу у нас получается нужная строка

$matrix = [
    [3,5,9,4,2,6],  // [3,9,6]  [5,4,2]
    [2,5,3,0,1,3],  // [3,6,9] + [5,4,2]
    [2,0,1,12,1,6],
    [6,1,0,3,9,2],
    [6,5,0,1,3,1]
];

moveElements($matrix, 3);

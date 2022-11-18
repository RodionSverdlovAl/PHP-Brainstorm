<?php
//В массиве А(N,N) найти суммы элементов, расположенных на главной диагонали, ниже
//диагонали и выше диагонали


function diagonalSumUpDown($arr) : void
{
    $arraySize = count($arr);
    $sumUp = 0;
    $sumMiddle = 0;
    $sumDown = 0;

    for ($row = 0; $row < $arraySize; $row++) {
        for ($col =0; $col < $arraySize; $col++) {
            if ($row == $col) {
                $sumMiddle += $arr[$row][$col];
            }
            if ($row < $col) {
                $sumUp += $arr[$row][$col];
            }
            if ($row > $col) {
                $sumDown += $arr[$row][$col];
            }
        }
    }

    echo "<pre>";
    echo "Сумма элементов на главной диагонали: "; echo $sumMiddle;
    echo "</br>";
    echo "Сумма элементов под главной диагональю: "; echo $sumDown;
    echo "</br>";
    echo "Сумма элементов над главной диагональю: "; echo $sumUp;
    echo "</br>";
}


$arr = [
    [3, 5, 7, 4, 8],
    [2, 5, 3, 6, 3],
    [1, 2, 1, 6, 1],
    [6, 9, 0, 1, 4],
    [6, 3, 0, 1, 2]
];

DiagonalSumUpDown($arr);

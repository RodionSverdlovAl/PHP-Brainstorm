<?php
//В массиве А(N,М) удалить столбцы, все элементы которых являются простыми числами.

function checkSimpleNumber($number) : bool
{
    $isPrimeNumber = true;

    if ($number == 0 || $number == 1) {
        $isPrimeNumber = false;
    } else {
        for ($i = 2; $i <= $number / 2; ++$i) {
            if ($number % $i == 0) {
                $isPrimeNumber = false;
                break;
            }
        }
    }

    return $isPrimeNumber;
}

function deleteRows($arr) : array
{
    $countOfCols = count($arr[0]);
    $countOfRows = count($arr);

    for ($col= 0; $col < $countOfCols; $col++) {
        $check = 0;
        for ($row = 0; $row < $countOfRows; $row++) {
            $check += checkSimpleNumber($arr[$row][$col]);
        }
        if ($check == $countOfRows) {
            for ($row = 0; $row < $countOfRows; $row++) {
                unset($arr[$row][$col]);
            }
        }
    }

    return $arr;
}

$arr = [
    [3,11,7,4,12],
    [2,13,13,6,31], // <--  тут простое число
    [12,17,1,11,1],
    [6,19,0,-21,1],
    [60,31,0,1,20]
];



echo "<pre>";
print_r(deleteRows($arr));
echo "</pre>";

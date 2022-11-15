<?php
//Определить, является ли число 2n m симметричным, т. е. запись числа содержит четное
//количество цифр и совпадают его левая и правая половинки

function checkSem($n):bool{
    $tmp = $n;
    $length = 0;
    $result = false;
    while ($tmp != 0){
        $tmp = floor($tmp / 10);
        $length++;
    }
    if($length %2 == 0){
        $tmp = $n;
        $reverse_n = 0;
        while ($tmp != 0) {
            $reverse_n = $reverse_n * 10;
            $reverse_n = $reverse_n + $tmp % 10;
            $tmp = floor($tmp / 10);
        }
        if($n == $reverse_n) {
            $result = true;
        }
    }

    return $result;
}

echo checkSem(123321); // true
echo checkSem(543456); // false

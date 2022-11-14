<?php

// Выяснить, образуют ли цифры данного натурального числа N возрастающую
//последовательность.

function check($n):bool{
    $prev = 9;
    while ($n!=0)
    {
        if ($n%10<=$prev) {
            $prev=$n%10;
            $n=$n/10;
        }
        else break;
    }
    if ($n==0) return true;
    else return false;
}

echo check(123456); // true (1)
echo check(123123); // false (0)

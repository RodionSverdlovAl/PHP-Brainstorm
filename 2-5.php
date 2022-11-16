<?php
//В массиве А(N) каждый элемент равен 0, 1 или 2. Переставить элементы массива так, чтобы
//сначала расположились все нули, затем все двойки и, наконец, все единицы.

function swap($arr, $i, $next){
    $x = $arr[$i];
    $arr[$i] = $arr[$next];
    $arr[$next] = $x;
    return $arr;
}

function task($arr)
{
    $size = count($arr);
    for ($i = 0; $i < $size; $i++) {
        for ($next = $i + 1; $next < $size - 1; $next++) {
            if ($arr[$i] === 2 && $arr[$next] === 0)
                $arr = swap($arr, $i, $next);
            if ($arr[$i] === 1 && $arr[$next] === 0)
                $arr = swap($arr, $i, $next);
            if ($arr[$i] === 1 && $arr[$next] === 2)
                $arr = swap($arr, $i, $next);
        }
    }
    return $arr;
}

$arr = [0,2,1,2,0,2,1,1,0,2,0,1];
echo "<pre>";
print_r(task($arr));
echo "</pre>";

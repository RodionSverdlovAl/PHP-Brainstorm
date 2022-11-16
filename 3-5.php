<?php
//В массиве А(N,М) найти сумму элементов тех столбцов, все элементы которых кратны
//заданному числу р

function sumColItems($arr, $p){
    $count_of_col = count($arr[0]);
    $count_or_rows = count($arr);
    $sum =0;
    for($col =0; $col<$count_of_col; $col++){
        $check = 0;
        for($row =0; $row<$count_or_rows; $row++){
            if($arr[$row][$col]%$p != 0){
                $check =1;
            }
        }
        if($check ==0){
            for($row =0; $row<$count_or_rows; $row++){
                $sum +=$arr[$row][$col];
            }
        }
    }
    return $sum;
}



$arr = [
    [3,5,0,1,1,5,1],
    [5,10,0,0,0,15,0],
    [12,5,1,1,1,10,1],
    [6,10,0,1,1,25,0],
    [60,15,0,1,0,55,0]
];



echo "<pre>";
echo sumColItems($arr, 5);
echo "</pre>";

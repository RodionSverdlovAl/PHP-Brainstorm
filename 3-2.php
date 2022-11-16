<?php

//В массиве А(N,М) найти номер строки, среднее арифметическое положительных элементов
//которой является наименьшим.

function checkRowInArray($arr):int{
    $check_arr = [];
    $count_of_col = count($arr[0]);
    $count_or_rows = count($arr);
    for($row = 0; $row<$count_or_rows; $row++ ){
        $sum_row_items = 0;
        for($col = 0; $col < $count_of_col; $col++){
            if($arr[$row][$col] > 0){
                $sum_row_items +=$arr[$row][$col];
            }
        }
        $check_arr[] = $sum_row_items;
    }
    $min = $check_arr[0];
    $index = 0;
    for($i=1;$i<count($check_arr);$i++){
        if($check_arr[$i]<$min)
        {
            $min=$check_arr[$i];
            $index=$i;
        }
    }
    return $index;
}


$arr = [
    [2,27,4,3,-5,-2,1],
    [11,9,-4,3,-5,2,3],
    [-2,7,4,3,-5,-2,6],
    [2,-7,9,-12,5,5,-7],
    [33,6,10,-2,15,-1,-7]
];



echo "<pre>";
print_r(checkRowInArray($arr));
echo "</pre>";

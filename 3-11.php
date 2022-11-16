<?php
//В массиве А(N,М) удалить нулевые строки


function checkNullRow($row):bool{
    for($i =0; $i<count($row); $i++){
        if($row[$i]==1){
            return false;
        }
    }
    return true;
}

function deleteRows($arr){
    $tmp =[];
    $count_of_col = count($arr[0]);
    $count_or_rows = count($arr);
    for($row =0; $row<$count_or_rows; $row++){
        if(!checkNullRow($arr[$row])){
            $tmp[] = $arr[$row];
        }
    }
    $arr = $tmp;
    return $arr;
}

$arr = [
    [1,0,0,1,1,0,1],
    [0,0,0,0,0,0,0],
    [1,1,1,1,1,1,1],
    [0,0,0,1,1,0,0],
    [1,0,0,1,0,1,0]
];



echo "<pre>";
print_r(deleteRows($arr));
echo "</pre>";

<?php

//В массиве А(N,М) найти максимальный и минимальный элементы среди всех элементов тех
//строк, которые упорядочены по возрастанию или по убыванию


// функции проверки упорядочености массива

function checkSortedForUp($arr, $size){
    for ($i=0; $i < $size - 1; $i++) {
        if ($arr[$i] > $arr[$i + 1]) {
            return false;
        }
    }
    return true;
}

function checkSortedForDown($arr, $size){
    for ($i=0; $i < $size - 1; $i++) {
        if ($arr[$i] < $arr[$i + 1]) {
            return false;
        }
    }
    return true;
}

function searchMinMaxElement($arr){
    $count_of_col = count($arr[0]);
    $count_or_rows = count($arr);
     for($row =0; $row<$count_or_rows; $row++){
         if(checkSortedForUp($arr[$row],$count_of_col)){ // если массив упорядочен по возрастанию
            echo "row index = ";
            echo $row;
            echo " min element = ";
            echo $arr[$row][0];
            echo " max element = ";
            echo $arr[$row][$count_of_col-1];
            echo "</br>";
         }
         if(checkSortedForDown($arr[$row],$count_of_col)) {  // если массив упорядочен по убыванию
             echo "row index = ";
             echo $row;
             echo " min element = ";
             echo $arr[$row][$count_of_col-1];
             echo " max element = ";
             echo $arr[$row][0];
             echo "</br>";
         }
     }

}

$arr = [
    [2,27,4,3,-5,-2,1],
    [-1,2,4,6,8,10,13],
    [-2,7,4,3,-5,-2,6],
    [-2,7,9,12,15,25,27],
    [33,6,5,-2,-15,-17,-27]
];



echo "<pre>";
searchMinMaxElement($arr);
echo "</pre>";

<?php
//В массив А(N), упорядоченный по возрастанию, вставить k элементов, не нарушая его
//последовательности.

function task_v2($arr, $insert_arr){
    for($j = 0; $j<count($insert_arr); $j++){
        $field = $insert_arr[$j];
        for ($i=0;$i<count($arr);$i++){
            if($arr[count($arr)-1] < $field){
                $arr[] = $field;
            }
            if ($arr[$i] > $field){
                array_splice($arr, $i, 0, $field);
                break;
            }
        }
    }
    return $arr;
}

function task($arr, $insert_arr){
    for($j=0; $j<count($insert_arr); $j++){
        $arr[] = $insert_arr[$j];
    }
    $size = count($arr);
    for( $i=0; $i < $size; $i++) { // i - номер прохода
        for ($j = $size - 1; $j > $i; $j--) {     // внутренний цикл прохода
            if ($arr[$j - 1] > $arr[$j]) {
                $x = $arr[$j - 1];
                $arr[$j - 1] = $arr[$j];
                $arr[$j] = $x;
            }
        }
    }
    return $arr;
}


$arr = [1,3,4,5,7,11,15,17,18,22,25,26,27,30];
$insert_arr = [2,5,4,7,32,1,12,48];
print_r(task_v2($arr, $insert_arr));


// 3 вариант реализации этого задания


function setArray($arr, $insertArr)
{
    $newArr = $arr;
    for($i = 0; $i < count($insertArr); $i++){
        $newArr = setField($newArr, $insertArr[$i]);
    }
    return $newArr;
}
function setField($arr, $field){
    $resArr = [];
    $count = count($arr);
    if ($field > $arr[$count - 1]){
        $arr[$count] = $field;
        return $arr;
    }
    for($i = 0, $j = 0; $i < $count; $i++, $j++){
        if ($arr[$i] > $field && $arr[$i - 1] < $field){
            if ($field != $arr[$i]){
                $resArr[$j] = $field;
                $j++;
            }
        }
        $resArr[$j] = $arr[$i];
    }
    return $resArr;
}

$arr = [1, 5, 7, 11, 18, 20, 30, 40, 70];
$field = [2,5,4,7,32,1,12,48, 80];
$arr = setArray($arr, $field);
echo "<pre>";
print_r($arr);
echo "</pre>";

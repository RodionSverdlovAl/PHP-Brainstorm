<?php
//В массиве А(N,М) найти сумму тех элементов, в записи которых используются только цифры 0,
//1, 3, 8.

function sumNumbersInMatrix($arr):int{
    $count_of_col = count($arr[0]);
    $count_or_rows = count($arr);
    $sum = 0;
    for($row = 0; $row<$count_or_rows; $row++ ) {
        for ($col = 0; $col < $count_of_col; $col++) {
            $number = $arr[$row][$col];
            $flag = false;
            while ($number > 0){
                $current = $number % 10;
                $number = floor($number / 10);
                if ($current === 0 || $current === 1 || $current === 3 || $current === 8)
                {
                    $flag = true;
                }else{
                    break;
                }
            }
            if ($flag)
            {
                if($arr[$row][$col]>=10 && $arr[$row][$col]<10000)
                $sum+=$arr[$row][$col];
                echo $arr[$row][$col];
                echo "</br>";
            }
        }
    }
    return $sum;
}

$arr = [
    [8310,27,4,3,-5,10,1],
    [-1,22,4,6,8,10,13],
    [-2,7,4,38,-5,-2,6],
    [-2,7,11,33,15,25,27],
    [33,6,5,-2,-15,-17,-27]
];



echo "<pre>";
echo sumNumbersInMatrix($arr);
echo "</pre>";

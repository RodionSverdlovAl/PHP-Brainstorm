<?php

//Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или
//убывания.

function printNumber():void{
    for($i = 1000; $i<10000; $i=$i+2){
        $tmp = $i;
        $check1= $check2 = true;
        for($j=0; $j<3; $j++){
            $prev = $tmp%10;
            $tmp /=10;
            if($tmp%10>=$prev){
                $check1 = false;
            }
            if($tmp%10<=$prev){
                $check2=false;
            }
        }
        if($check1 || $check2){
            echo $i; echo "<br>";
        }
    }
}

printNumber();

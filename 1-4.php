<?php
//Получить все четырехзначные числа, в записи которых встречаются только цифры 0,2,3,7. Тут
//речь идёт про числа, где встречается только данный набор цифр, без повторений, т.е. 2037 -
//верно, 2000 - не верно

function printNumbers():void{

    for ($i = 1000; $i < 10000; $i++) {
        $number = $i;
        $flag = false;
        $null = $two =$thee=$seven = 0;
        while ($number > 0)
        {
            $current = $number % 10;
            $number = floor($number / 10);
            if ($current === 0 || $current === 2 || $current === 3 || $current === 7)
            {
                $flag = true;

            }else{
                break;
            }
            if($current === 0){
                $null++;
            }
            if($current === 2){
                $two++;
            }
            if($current === 3){
                $thee++;
            }
            if($current === 7){
                $seven++;
            }
        }

        if ($flag)
        {
            if($null === 1 && $two ===1 && $thee ===1 && $seven===1){
                echo $i; echo "</br>";
            }

        }

    }
}

printNumbers();

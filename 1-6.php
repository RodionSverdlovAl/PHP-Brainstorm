<?php

function nod($a ,$b):int{
    if($b==0){
        return $a;
    }
    return nod($b,$a%$b);
}

echo nod(115,230); // 115
echo nod(10,20); // 10

<?php
//В массиве А(N,M) расположить элементы строк в порядке убывания. Вставить в каждую строку
//заданное число р, не нарушая этот порядок.


function sortRow($row):array{
    $n = count($row);
    for ($i = 0; $i<$n; $i++)
        for ($j = $n-1; $j>$i; $j--)
            if ($row[$j - 1] < $row[$j])       //если текущий элемент меньше следующего, то
                {
                    $tmp = $row[$j - 1];     //сохранить значение текущего элемента;
                    $row[$j - 1] = $row[$j];    //заменить текущий элемент следующим;
                    $row[$j] = $tmp;       //заменить следующий элемент текущим.
                }
    return $row;
}

function insertItemInRows($arr, $item){
    $count_of_col = count($arr[0]);
    $count_or_rows = count($arr);
    for($row=0; $row<$count_or_rows; $row++){
        $arr[$row][] = $item;
        $arr[$row] = sortRow($arr[$row]);

    }

    return $arr;
}

$arr = [
    [3,5,7,4,12,5,1],
    [5,10,2,0,4,15,0],
    [12,5,1,11,1,10,1],
    [6,10,0,-21,1,25,0],
    [60,15,0,1,20,55,0]
];



echo "<pre>";
print_r(insertItemInRows($arr,8));
echo "</pre>";

<?php

class Combinatorics
{
    private $arr;
    private $viborka;

    public function __construct ($str, $viborka)
    {
        try {
            if (strlen($str) == 0) {
                throw new Exception("строка пуста");
            }
            if (!preg_match("/^([0-9])+$/",$str)) {
                throw new Exception("В строке должны быть только цифры");
            }
            $this->arr = str_split($str,1);
        } catch (Exception $e) {
            echo $e."</br>";
            die();
        }

        $this->viborka = $viborka;
    }

    private function swap ($array, $i, $j) : array
    {
        $tmp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $tmp;
        return $array;
    }

    private function factorial ($i) : int
    {
        if ($i == 0) {
            return 1;
        } else {
            return $i * $this->factorial($i - 1);
        }
    }

    public function counter () : void
    {
        echo "Колличество размещений: ";
        echo $this->factorial(count($this->arr)) / $this->factorial(count($this->arr) - $this->viborka);
        echo "</br>";
    }

    private function nextSet (&$indexes, $arrSize, $viborka) : bool
    {
        do{
            $j = $arrSize - 2;
            while ($j != -1 && $indexes[$j] >= $indexes[$j + 1]) {
                $j--;
            }
            if ($j == -1) {
                return false; // больше размещений нет
            }
            $k = $arrSize - 1; // последний элемент
            while ($indexes[$j] >= $indexes[$k]) { // находим элемент меньше текущего
                $k--;
            }
            $indexes = $this->swap($indexes, $j, $k);
            $l = $j + 1;
            $lastElement = $arrSize - 1;
            while ($l < $lastElement) {
                $indexes = $this->swap($indexes, $l++, $lastElement--); // после перестановки последний становится предпоследним а текущий эл становится следующим
            }
        } while ($j > $viborka - 1);
        return true;
    }

    private function pr ($indexes, $n, $arr) // вывод размещения
    {
        for ($i = 0; $i < $n; $i++) {
            echo $arr[$indexes[$i]] . " ";
        }
        echo "</br>";
    }

    public function getPlacement () {
        $arrSize = count($this->arr);
        $indexes = [];
        for ($i = 0; $i < count($this->arr); $i++) {
            $indexes[] = $i;
        }
        $this->pr($indexes, $this->viborka,$this->arr);
        while ($this->nextSet($indexes, $arrSize,$this->viborka)) {
            $this->pr($indexes, $this->viborka,$this->arr);
        }
    }
}


$obj = new Combinatorics("879",3);
$obj->counter();
$obj->getPlacement();

<?php
echo "Digite os valores para as coordenedas X e Y:" . PHP_EOL;
$cordX = intval(readline());
$cordY = intval(readline());


while ($cordX != 0 && $cordY != 0) {
    if ($cordX > 0 && $cordY > 0) {
        echo "QUADRANTE Q1" . PHP_EOL;
    }elseif ($cordX < 0 && $cordY > 0) {
        echo "QUADRANTE Q2" . PHP_EOL;
    }elseif ($cordX < 0 && $cordY <0){
        echo "QUADRANTE Q3" . PHP_EOL;
    }else{
        echo "QUADRANTE Q4" . PHP_EOL;
    }echo "Digite os valores para as coordenedas X e Y:";
    $cordX = intval(readline());
    $cordY = intval(readline());
}
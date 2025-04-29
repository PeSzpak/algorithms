<?php
//define a variavel como array (array pode receber mais de um valor)
$array = [];
$max = 0;
$pos = 0;

//usuario define o unumero maximo de vezes que um laço pode repetir
$n = intval(readline());//6
$array = explode(" ", readline());//8.0 4.0 10.0 14.0 13.0 7.0

for ($i = 0; $i < $n; $i++) {
    $value = floatval($array[$i]);
    if ($value > $max) {
        $max = $value;
        $pos = $i;
    }
}
echo number_format($max, 1, '.', '');
echo $pos . PHP_EOL;
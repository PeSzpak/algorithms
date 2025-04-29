<?php
echo "Digite as três distâncias (uma por vez): ";
$distancia1 = floatval(fgets(STDIN));
echo "";
$distancia2 = floatval(fgets(STDIN));
echo "";
$distancia3 = floatval(fgets(STDIN));

if($distancia1 > $distancia2 &  $distancia1 > $distancia3){
    echo"MAIOR DISTANCIA = $distancia1";
}
elseif($distancia2 > $distancia1 &  $distancia2 > $distancia3){
    echo"MAIOR DISTANCIA = $distancia2";
}
else {
    echo"MAIOR DISTANCIA = $distancia3";
}

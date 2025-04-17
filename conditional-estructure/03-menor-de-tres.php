<?php
echo "Digite o primeiro numero: ";
$um = floatval(readline());

echo"Digite o segundo numero: ";
$dois = floatval(readline());

echo"Digite o terceiro numero: ";
$tres = floatval(readline());

if($um < $dois &  $um < $tres){
    echo"MENOR = $um";
}
elseif($dois < $um &  $dois < $tres){
    echo"MENOR = $dois";
}
else {
    echo"MENOR = $tres";
}

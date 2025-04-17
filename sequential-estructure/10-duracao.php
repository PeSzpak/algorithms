<?php
echo "Digite o tempo que quer ver (em segundos):";
$segundos = intval(readline());

$horas = intval($segundos / 3600);
$resto = $segundos % 3600;

$minutos = intval($resto / 60);
$resto = $resto % 60;

$segundos = $resto;

echo "$horas:$minutos:$segundos";


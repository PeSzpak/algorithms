<?php
echo "Escreva o nome da primeira pessoa:";
$nome_1 = readline();
echo "Escreva a idade da primeira pessoa:";
$idade_1 = intval(readline());


echo "Escreva o nome da segunda pessoa:";
$nome_2 = readline();
echo "Escreva a idade da segunda pessoa:";
$idade_2 = intval(readline());

$media = ($idade_1 + $idade_2)/2;
//$media = $soma/2;

echo "A idade média de $nome_1 e $nome_2 é de $media anos";

<?php
    //entrada
    echo "Digite a largura do terreno: ";
    $largura = floatval(readline());//10

    echo"Digite o Comprimento do terreno: ";
    $comprimento = floatval(readline());//30

    echo "Digite o Valor M2 do terreno: ";
    $vlr_m2 = floatval(readline());//200

    //processamento
    $area = $largura * $comprimento;
    $preco = $area * $vlr_m2;

    //saída
    echo "Área do terreno =" . number_format($area, 2, '.', ''). PHP_EOL;
    echo "Preço do terreno =" . number_format($preco, 2, '.', '') . PHP_EOL;
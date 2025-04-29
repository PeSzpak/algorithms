<?php

$c = 0;
$r = 0;
$s = 0;

echo "Quantos casos de Teste serao digitados? ";
$testCase = intval(readline());

for ($i = 0; $i < $testCase; $i++) {
    echo "Quantidade de cobaias: ";
    $qttguineaPig = intval(readline());
    echo "Tipo de cobaia: ";
    $typeGuineaPig = readline();
    switch ($typeGuineaPig) {
        case 'C':
            $c+=$qttguineaPig;
            break;
        case 'R':
            $r+=$qttguineaPig;
            break;
        case 'S':
            $s+=$qttguineaPig;
            break;
        default:
            echo "Tipo invalido\n";
            break;
    }
}
$tot = $c + $r + $s;
$percC = $c / $tot * 100;
$percR = $r / $tot * 100;
$percS = $s / $tot * 100;

echo "RELATORIO FINAL: \n";
echo "Total: $tot cobaias\n";
echo "Total de coelhos: $c\n";
echo "Total de ratos: $r\n";
echo "Total de sapos: $s\n";
echo "Percentual de coelhos: " .
    number_format($percC, '2','.','') . PHP_EOL;
echo "Percentual de ratos: " .
    number_format($percR, '2','.','') . PHP_EOL;
echo "Percentual de sapos: " .
    number_format($percS, '2','.','') . PHP_EOL;


<?php

echo "Digite as idades: " . PHP_EOL;
$cont = 0;
$somaIdades = 0;

$idade = intval(readline());

while ($idade >= 0) {
    $somaIdades += $idade;
    $cont++;
    $idade = intval(readline());
}
if ($somaIdades > 0) {
    $media = $somaIdades / $cont;
    echo "MÉDIA = " . number_format($media, 2, '.', '') . PHP_EOL;
} else {
    echo "IMPOSSÍVEL CALCULAR " . PHP_EOL;
}

<?php
echo "digite o numero de minutos consumidos: ";
$minutos = intval(fgets(STDIN));

if ($minutos > 100) {
    $total = ($minutos - 100) * 2;
    $valor = $total + 50;
} else {
    $valor = 50;
}
echo"$valor";
<?php
echo "Preço unitario do produto:";
$preco = floatval(readline());

echo "Quantidade comprada do produto:";
$qntd = intval(readline());

echo "Dinheiro recebido:";
$dinheiro = floatval(readline());

$valor = $preco * $qntd;
$troco = $dinheiro - $valor;

echo "O troco é:". number_format($troco, 2, '.', '') . PHP_EOL;


<?php
echo "Preço unitario do produto: ";
$preco = intval(fgets(STDIN));

echo "Quantidade comprada: ";
$qntd = intval(fgets(STDIN));

echo "Dinheiro recebido: ";
$cash = intval(fgets(STDIN));

$troco = $cash - $preco * $qntd;

if ($troco >= 0 ){
    echo "Troco é: $troco";
}else {
    $saldopagar = abs($cash - $preco * $qntd);
    echo"TA FALTANDO R$ $saldopagar";
}

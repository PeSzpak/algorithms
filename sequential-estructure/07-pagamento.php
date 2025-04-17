<?php
echo "Nome do funcionario:";
$nome = readline();

echo "Valor por hora:";
$valor = floatval(readline());

echo "horas trabalhadas:";
$horas = floatval(readline());

//processamento
$pagamento =  $valor * $horas;

echo "O pagamento do(a) $nome é de R$$pagamento" .
    number_format($pagamento, 2,'.','').
    PHP_EOL;
<?php
echo "Digite a medida de glicose: ";
$medida = floatval(fgets(STDIN));

if ($medida <= 100) {
    echo"Classificação: Normal";
}
elseif ($medida <= 140){
    echo"classificacao: Elevado";
}else{
    echo"classificacao: Diabetes (Procure seu médico)";
}
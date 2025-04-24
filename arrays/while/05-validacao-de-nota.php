<?php
echo "Digite a primeira nota: ";
$n1 = floatval(fgets(STDIN));

while ($n1 < 0.0 || $n1 > 10.0){
    echo "VALOR INVALIDO! Tente Novamente:";
    $n1 = floatval(fgets(STDIN));
}

echo "Digite a segunda nota: ";
$n2 = floatval(fgets(STDIN));

while ($n2 < 0.0 || $n2 > 10.0){
    echo "VALOR INVALIDO! Tente Novamente:";
    $n2 = floatval(fgets(STDIN));

}
$media = ($n1 + $n2) / 2;
echo "MEDIA: $media";



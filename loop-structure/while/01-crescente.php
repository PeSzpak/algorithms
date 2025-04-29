<?php
echo "Digite dois numeros: " . PHP_EOL;
$n1 = intval(fgets(STDIN));
$n2 = intval(fgets(STDIN));

while ($n1 != $n2) {
    if ($n1  > $n2) {
        echo"DECRESCENTE!" . PHP_EOL;
}else{
    echo "CRESCENTE!" . PHP_EOL;
}
    echo "Digite dois numeros: " . PHP_EOL;
    $n1 = intval(fgets(STDIN));
    $n2 = intval(fgets(STDIN));
}
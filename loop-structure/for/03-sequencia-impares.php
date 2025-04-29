<?php


echo "Digite o valor de X: ";
$x = intval(fgets(STDIN));

for ($i = 1; $i <= $x; $i++) {
    if ($i % 2 != 0) {
        echo "$i" . PHP_EOL;
    }
}


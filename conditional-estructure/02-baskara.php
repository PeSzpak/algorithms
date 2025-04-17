<?php

// delta = sqrt(b² - 4 * a * c)
//(-b + delta) / (2 * a)
//(-b - delta) / (2 * a)

echo "Coeficiente a:";
$a = floatval(readline());
echo"Coeficiente b:";
$b = floatval(readline());
echo"Coeficiente c:";
$c = floatval(readline());

$delta = pow($b, 2) - 4 * $a * $c;
if($delta < 0){
    echo"Esta esquação não possui raizes reais \n";
}else {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);

    echo "X1 = " . number_format($x1, 4, '.','') . PHP_EOL;
    echo "X2 = " . number_format($x2, 4, '.','') . PHP_EOL;
}

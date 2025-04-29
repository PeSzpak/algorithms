<?php

echo "Digite a Senha: ";
$senha = intval(readline());

while ($senha != 2002) {
    echo "Senha Invalida! Tente Novamente: ";
    $senha = intval(readline());
}
echo "Acesso permitido!" . PHP_EOL;

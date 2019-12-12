<?php

#Usado o SHELL PHP para executar este code

echo "Diferencia entre o uso dos comparadores == e ===" . PHP_EOL;

if (1 == "1") {
    echo "1 e '1' sao iguais" . PHP_EOL;
} else {
    echo "1 e '1' nao sao iguais" . PHP_EOL;
}

if (1 === "1") {
    echo "1 e '1' sao iguais" . PHP_EOL;
} else {
    echo "1 e '1' nao sao iguais" . PHP_EOL;
}

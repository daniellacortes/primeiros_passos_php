<?php

$A = 21;
$B = -14;
$C = 7;

$lista = [$A, $B, $C];
$listaentrada = [$A, $B, $C];

sort($lista);

for ($i = 0; $i < count($lista); $i++){
    echo $lista[$i]."\n";
}
echo "\n";
for ($i = 0; $i < count($lista); $i++){
    echo $listaentrada[$i]."\n";
}

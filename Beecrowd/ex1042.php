<?php

$A = 7;
$B = 21;
$C = -14;

final class Ex1042
{
    public function main($A, $B, $C)
    {
        $lista = [$A, $B, $C];
        $k = 1;

        for ($j = 0; $j < count($lista); $j++) {

            for ($i = 0; $i < count($lista) - $k; $i++) {

                if ($lista[$i] > $lista[$i + 1]) {
                    $menor = $lista[$i + 1];
                    $maior = $lista[$i];
                    $lista[$i] = $menor;
                    $lista[$i + 1] = $maior;
                }
            }
            $i = 0;
            $k++;
        }
        $A = $lista[0];
        $B = $lista[1];
        $C = $lista[2];

        $listaord = $A."\n".$B."\n".$C."\n\n";

        return $listaord;
    }


    public function lista($A, $B, $C)
    {

        $lista = "$A\n$B\n$C\n";

        return $lista;
    }

}

$listaordenada = new Ex1042();
print_r($listaordenada->main($A, $B, $C));
echo $listaordenada->lista($A, $B, $C);

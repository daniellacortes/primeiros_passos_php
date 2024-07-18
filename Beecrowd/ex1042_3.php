<?php

$lista = [10, 12, 7, 21, 60, 4];

final class Ex1042_3
{
    public function main($lista)
    {
        $k = 1;

        for ($j = 0; $j < count($lista); $j++) {

            for ($i = 0; $i < count($lista) - $k; $i++) {
                $maior = "";

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

        $lista = implode("\n", $lista);
        return $lista;
    }

    public function lista_entrada($lista)
    {
        $listaord = implode("\n", $lista);
        return $listaord;
    }
}

$listaordenada = new Ex1042_3();
print_r ($listaordenada->main($lista));
echo "\n\n" . $listaordenada->lista_entrada($lista);

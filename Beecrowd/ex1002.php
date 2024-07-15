<?php

$raio = 100.64;

final class Ex1002 {
    public function main($raio) {
        $n = 3.14159;
        $area = ($n*($raio**2));
        $resposta = number_format($area, 4,'.', '');
        return "A=$resposta\n";
    }

}

$area = new Ex1002();
echo $area->main ($raio);
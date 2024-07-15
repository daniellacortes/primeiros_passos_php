<?php

$A =30;
$B = 10;

final class Ex1003{

    public function main ($A, $B){
        $SOMA = $A + $B;
        $return = "SOMA = $SOMA\n";
        return $return;
    }

}

$resultado = new Ex1003();
echo $resultado->main($A, $B);
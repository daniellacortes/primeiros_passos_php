<?php

$A = 10;
$B = 9;

final class Ex1001 {
    public function main ($A, $B){
        $X = $A + $B;
        return "X = $X\n";
    }
    }

$soma = new Ex1001();
echo $soma->main($A, $B);
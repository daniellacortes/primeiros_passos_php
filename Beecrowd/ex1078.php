<?php

final class Ex1078
{
    public function main($var)
    {
        $tabuada = "";

        for ($i = 1; $i <= 10; $i++) {
            $res = $i * $var;
            $tabuada .= $i . " X " . $var . " = " . $res . "\n";
        }

        return $tabuada;
    }
}
<?php
$var = 140;
final class Ex1078
{
    public function main($var)
    {
        $tabuada = "";

        for ($i = 1; $i <= 10; $i++) {
            $res = $i * $var;
            $tabuada .= $i . " x " . $var . " = " . $res . "\n";
        }

        return $tabuada;
    }
}

$tabuada = new Ex1078();
echo $tabuada->main($var);
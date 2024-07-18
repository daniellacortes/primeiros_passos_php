<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class Ex1078Test extends TestCase {
    
    
    public function test_1078(): void
    {   
        $var = 140;
        $esperado = "1 x 140 = 140\n
        2 x 140 = 280\n
        3 x 140 = 420\n
        4 x 140 = 560\n
        5 x 140 = 700\n
        6 x 140 = 840\n
        7 x 140 = 980\n
        8 x 140 = 1120\n
        9 x 140 = 1260\n
        10 x 140 = 1400\n";

        $tabuada = new Ex1078();
        $resultado = $tabuada->main($var);       

        $this->assertEquals($esperado, $resultado);
    }
}
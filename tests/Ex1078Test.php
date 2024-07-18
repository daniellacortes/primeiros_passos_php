<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class Ex1078Test extends TestCase {
    
    
    public function test_1078(): void
    {   
        $var = 140;
        $esperado = "1 x 140 = 140\n2 x 140 = 280\n3 x 140 = 420\n4 x 140 = 560\n5 x 140 = 700\n6 x 140 = 840\n7 x 140 = 980\n8 x 140 = 1120\n9 x 140 = 1260\n10 x 140 = 1400\n";

        $tabuada = new Ex1078();
        $resultado = $tabuada->main($var);       

        $this->assertEquals($esperado, $resultado);
    }
}
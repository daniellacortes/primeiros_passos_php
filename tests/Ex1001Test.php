<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class Ex1001Test extends TestCase
{
    public function testEx1001(): void
    {   
        $A=5;
        $B = 6;
        $X= $A +$B;
        $X = "X = $X\n";
        $soma = new Ex1001();
        $resultado = $soma->main($A, $B);

        $this->assertEquals($X, $resultado);
    }
}
<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class Ex1003Test extends TestCase
{
    public function testEx1003(): void
    {   

        $A =80;
        $B = 20;
        $SOMA = $A + $B;
        $SOMATeste = "SOMA = $SOMA\n";

        $total = new Ex1003();
        $resultado = $total->main($A, $B);       

        $this->assertEquals($SOMATeste, $resultado);
    }
}
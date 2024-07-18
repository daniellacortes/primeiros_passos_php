<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class Ex1002Test extends TestCase
{
    public function testEx1002(): void
    {   
        $raio = 150.00;
        $n = 3.14159;
        $area = ($n*($raio**2));
        $area = number_format($area, 4,'.', '');
        $resposta = "A=$area\n";

        $total = new Ex1002();
        $resultado = $total->main($raio);       

        $this->assertEquals($resposta, $resultado);
    }
}
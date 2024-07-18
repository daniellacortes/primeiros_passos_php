<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class Ex1042Test extends TestCase {
    
    
    public function testEx1042_1(): void
    {   
        $esperado = "10\n48\n21\n";

        $lista = new Ex1042();
        $resultado = $lista->lista(10, 48, 21);       

        $this->assertEquals($esperado, $resultado);
    }

    public function testEx1042_2(): void
    {
        $esperado = "10\n21\n48\n\n";

        $listaord = new Ex1042();
        $resultado = $listaord->main(10, 48, 21);       

        $this->assertEquals($esperado, $resultado);
    }
}
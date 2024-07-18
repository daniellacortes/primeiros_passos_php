<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class Ex1042_3Test extends TestCase {
    
    
    public function testEx1042_3(): void
    {   
        $entrada = [10, 48, 21, 7];
        $esperado = "10\n48\n21\n7";

        $lista = new Ex1042_3();
        $resultado = $lista->lista_entrada($entrada);       

        $this->assertEquals($esperado, $resultado);
    }

    // public function testEx1042_3_2(): void
    // {
    //     $esperado = "10\n21\n48\n\n";

    //     $listaord = new Ex1042_3();
    //     $resultado = $listaord->main(10, 48, 21);       

    //     $this->assertEquals($esperado, $resultado);
    // }
}
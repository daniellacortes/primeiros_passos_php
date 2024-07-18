<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class Ex1000Test extends TestCase
{
    public function testEx1000(): void
    {    
        $helloExpect = new Ex1000;
        $hello = $helloExpect->main();

        $this->assertEquals("Hello World!\n", $hello);

    }
}
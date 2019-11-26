<?php


//require "vendor/autoload.php";
use PHPUnit\framework\TestCase;

class AlgumaClasse
{
    public function fazAlgo()
    {
        //Funcao a implementar
    }

    public function RetornaNumero()
    {
        //Funcao a implementar
    }
}

class Mock extends TestCase
{
    public function testMock()
    {
        $duble = $this->createMock(AlgumaClasse::class); 

        $duble->method('FazAgo')
        ->willReturn('foo');

        $duble->method('RetornaNumero')
        ->willReturn(5);

        $this->assertSame('foo',$duble->fazAlgo(),"Nao fez algo");

        $this->assertEquals(5,$duble->RetornaNumero());
    }
}

?>
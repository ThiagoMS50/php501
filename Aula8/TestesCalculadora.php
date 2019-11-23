<?php

require_once '.vendor/phpunit/phpunit/tests/unit/Framework/TestCaseTest.php';
require_once 'Calculadora.php';

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function testSomar()
    {
        $operacoes = new Calculadora();
        $resultadoSoma = somar(1,3);

        $this->assertEquals(4,$resultadoSoma,'Erro na Soma');
    }
   
}


?>
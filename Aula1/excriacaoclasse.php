<?php

class Cachorro
{
    //definicao de atributos
    public $nome = "Rex";
    public $idade = 13;

    //definicao metodos
    public function mostraIdade()
    {
        echo $idade;
    }

    public function mostraNome()
    {
        echo $nome;
    }
    public function late()
    {
        echo "AU AU AU AU";
    }
}

$objeto = new Cachorro();

$objeto->late();

?>
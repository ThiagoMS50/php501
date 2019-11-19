<?php

require_once "objetoInterface.php";

class Exercicio implements objeto
{
    public function __toString()
    {
        echo "Estou sendo convertido para String";
    }

    public function __invoke()
    {
        echo "Estou sendo chamado como Metodo";
    }

    public function __set($parametro, $valor)
    {
        echo "Atribuindo a variavel {$parametro} {$valor}";
    }

    public function __get($parametro)
    {
        echo "Acessando o atributo {$parametro}";
    }

    public function __call(string $metodo,arrays $valores)
    {
        echo "Chamando  {$metodo}";
        //return $this->$metodo;
    }

    public static function __callStatic($metodo, $valores)
    {
        echo "Chamando  {$metodo}";
    }

    public function metodo()
    {
        //nao funciona
    }
}
$obj = new Exercicio;

$obj->metodo();
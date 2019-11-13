<?php

function __autoload(string $class)
{
    $arquivo = "classe/$class.php";
    require_once($arquivo);
}

$funcionario = new Funcionario();
$funcionario->nome = 'Godofredo';
$funcionario->sobrenome = 'Silva';
$funcionario->dataNascimento = '1966-02-06';
$funcionario->sexo = 'indefinido';
$funcionario->cargo = 'Escravo/Programador';
$funcionario->setor = 'Tecnologia da info';
$funcionario->atributoNovo = 'Novo';

echo "<pre>";
var_dump($funcionario);

echo "<hr>";
echo "nome do funcionario:{$funcionario->nomeCompleto()}";

$cliente = new Cliente();
$cliente->rg = '44.901.586-5';
$cliente->cpf = '362.797.758.01';
$cliente->nome = 'Teste';
$cliente->sobrenome = 'indefinido';
$cliente->dataNascimento = '1966-02-06';
$cliente->sexo = 'indefinido';

echo "<br>";
var_dump($cliente);
echo "<br>";
echo "nome do cliente:{$cliente->nomeCompleto()}";


$estagiario = new Estagiario();
echo "<br>";
$estagiario->plr = 9500;
var_dump($estagiario);


echo "<br>";


?>
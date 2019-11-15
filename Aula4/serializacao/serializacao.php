<?php

class Funcionario{
    public function oi(){
        echo "Ola<br>";  
    }
    public function __destruct(){
        echo "Estou morrendo finalmente...<br>";  
    }

    public function __sleep(){
        return ['nome','cargo'];  
    }
    public function __wakeup(){
        echo "Morri nao, pegadinha...<br>"; 
    }
    
}

$funcionario = new Funcionario;

$funcionario->nome = 'joaquim jose';
$funcionario->sobrenome = 'da siva Xavier';
$funcionario->dataNascimento = '1746-11-12';
$funcionario->sexo = 'M';
$funcionario->cargo = 'Morte';
$funcionario->setor = 'Funerario';

echo "<pre>";

var_dump($funcionario);

echo serialize($funcionario);

$serializado = serialize($funcionario);

unset($funcionario);

echo "<br><br>";
$funcionario = unserialize($serializado);


$funcionario->oi();



?>
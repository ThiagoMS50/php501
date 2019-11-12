<?php

class Usuario {
    const STATUS_ATIVO = true;
    const STATUS_INATIVO = false;

    public $ativo = true;
}

$usuario = new Usuario();
//Aqui o usuario esta ativo
var_dump($usuario->ativo === Usuario::STATUS_ATIVO);
var_dump($usuario->ativo === Usuario::STATUS_INATIVO);

$usuario->ativo = false;

//Aqui o usuario esta inativo
var_dump($usuario->ativo === Usuario::STATUS_ATIVO);
var_dump($usuario->ativo === Usuario::STATUS_INATIVO);


if($usuario->ativo === Usuario::STATUS_ATIVO){
    echo "<p>Ativo</p>";
}else{
    echo "<p>Desativado</p>";

}



?>
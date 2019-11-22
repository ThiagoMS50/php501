<?php

//parametros para conexao
$servidor = 'mysql:host=localhost;dbname=blog';
$usuario = 'developer';
$senha = '4linux';
//teste de conexao
try {
    //cursor de conexão
    $conexao = new PDO($servidor, $usuario, $senha);
    $res = $conexao->query('SELECT * FROM usuarios');
    echo "<pre>";
    print_r($res->fetchAll());
     
} catch (PDOException $erro) {
    echo $erro;
}

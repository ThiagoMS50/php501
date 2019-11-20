<?php

$servidor = 'mysql:host=localhost;dbname=blog';
$usuario = 'developer';
$senha = '4linux';

try{
    $conexao = new PDO($servidor,$usuario,$senha);
    echo " <pre> ";
    echo "Conexao efetuada com sucesso <br>";
    $res = $conexao->query('SELECT * FROM usuarios');
    foreach ($res as $linha){

        print_r($linha);
    }

} catch (PDOException $e){
    echo "Erro{$e->getMessage()}<br>";
}

?>
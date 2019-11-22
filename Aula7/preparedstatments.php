<?php

//parametros para conexao
$servidor = 'mysql:host=localhost;dbname=blog';
$usuario = 'developer';
$senha = '4linux';
//teste de conexao
try {
    //cursor de conexão
    $conexao = new PDO($servidor, $usuario, $senha);
    $email = "thiagomartins%";

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $conexao->prepare('SELECT * FROM usuarios WHERE email LIKE :email');
    $statement->bindParam(':email',$email,PDO::PARAM_STR,50);
    $statement->execute();

    $res = $statement->fetchAll(PDO::FETCH_ASSOC);

    foreach ($res as $usuario){
        echo $usuario['nome'] ."<br>";
        echo $usuario['email'] ."<br>";
       
    }
    
    
} catch (PDOException $erro) {
    echo $erro;
}
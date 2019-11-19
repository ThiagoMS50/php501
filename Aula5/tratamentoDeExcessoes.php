<?php

class testeException
{
    public function mensagem(int $msg) : int
    {
        if(empty($msg)){
            throw new Exception("parametro mesagem obrigatorio",500);

        }
        return $msg;
    }
}

$obj = new testeException();

try{
    echo $obj->mensagem();  
}catch (Esception $e){
    echo "mensagem e um parametro obrigatorio<br>";
}catch (ArgumentCountError $e){
    echo "Falta parametros<br>";
}catch (TypeError $e){
    echo "Confira o tipo de variave inserida: {$e}<br>";    
}finally {
    echo "Fim da execucao";
}


?>
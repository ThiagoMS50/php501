<?php

class MinhaExcessao extends Exception
{
    public function __construct($mensagem,$code = 0, Exception $previous = null){
        parent::__construct($mensagem,$code,$previous);
    }

    public function __toString(){
        return __CLASS____.":[{$this->code}]:{$this->message}\n";
    }

    public function customFunction(){
        echo "Uma funçao especifica desse tipo de excecao\n";
    }
}

class TesteException
{
    public function mensagem(string $msg): string{
        if(empty($msg)){
            throw new MinhaExcessao('parametro mensagem e obrigatorio',500);
        }
        return $msg;
    }
}

$teste = new TesteException;
try{
    echo $teste->mensagem('Software livre funciona!!!<br>');
}catch(MinhaExcessao $e){
    echo 'Olha ela aki ->', $e;
    $e->customFunction();
}

?>
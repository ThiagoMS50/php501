<?php

class Profissao
{
    //crtl+shift+i Formatar segundo psr2

    public $salario;
    public $cargo;
    public $tempoDeCasa;

    /**
     * Classe contrutora
     * 
     */

     public function __construct($cargo)
     {
        echo $cargo ." Criado com sucesso!!";
     }

     public function __destruct()
     {
        echo " Objeto sendo destruido com sucesso!!";
     }

}
echo "<pre>";
$pedreiro = new Profissao('Pedreiro');
unset($pedreiro);
echo "<br>";
var_dump($pedreiro);
echo " Fim de!!";


?>
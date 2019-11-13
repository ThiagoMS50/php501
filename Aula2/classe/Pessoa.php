<?php

class Pessoa
{
    //crtl+shift+i Formatar segundo psr2

    public $nome;
    public $sobreome;
    public $datanascimento;
    public $sexo;

    /**
     * Classe contrutora
     * 
     */

     public function nomeCompleto() : string
     {
        return " {$this->nome} {$this->sobrenome}";
     }

     

}


?>
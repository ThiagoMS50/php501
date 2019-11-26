<?php

namespace Curso\Loja\Entidades;

/* @Entity @Table(name="produto")*/

 class produto
 {  
     /* @Id @column(type="integer") @GeneratedValue*/
     protected $id;  
     
     /* @column(type="string", length=50)*/
     protected $nome; 

     /* @column(type="decima", precision=10, scale=2)*/
     protected $preco;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setNome()
    {
        $this->nome = $nome;
    }
    
    public function setPreco()
    {
        $this->preco = $preco;
    }



 }

?>
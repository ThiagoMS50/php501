<?php

class TestePropriedade 
{    
    protected $nome;

    public function __set($propriedade, $valor)
    {    
        if(property_exists(__CLASS__,$propriedade)){            
            $this->$propriedade = $valor;
            echo __FILE__;
        }else{
            echo "Propriedade {$propriedade} nao existe, favor criar</br>";
            echo "O valor {$valor} nao pode ser atribuido no momento";
            
        }
    }
    
}

class  TestePropriedade2
{    
    protected $nome;
    protected $idade;
    protected $sobreome;

    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;  
    }

    public function __set($propriedade, $valor)
    {    
        if(property_exists(__CLASS__,$propriedade)){  
            echo "Valor Atribuido</br>";
            $this->$propriedade = $valor;           
        }else{
            echo "Voce nao possui permissao para criar atributo";
           
            
        }
       
    }

    public function __get($propriedade)
    {
        echo "Voce acessou o atributo {$propriedade}</br>"; 
        echo $this->$propriedade;
    }
    
}


$obj2 = new TestePropriedade2('tms',29);
echo $obj2->nome;
$obj2->sobrenome = "martins";



?>
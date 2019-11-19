<?php

    class TesteMetodo
    {
        public function __call(string $metodo, array $args)
        {    
            if(method_exists(__CLASS__,$metodo)){
                echo "Chamando o metodo {$metodo}";
                return $this->$metodo(implode($args));
            }else{
                echo "Nao foi possivel acessar {$metodo} </br>"; 
                echo "Verifique se o mesmo existe </br>";             
            }
        }
        public static function __callStatic(string $metodo, array $args)
        {    
            if(method_exists(__CLASS__,$metodo)){
                echo "Chamando o metodo {$metodo}";
                return $self::$metodo(implode($args));
            }else{
                echo "Nao foi possivel na classe {$metodo} </br>"; 
                echo "Verifique se o mesmo existe </br>";             
            }
        }
        public static function mostraMensagem()
        {
            echo "Funcao em execucao </br>"; 
        }
    }

    $obj = new TesteMetodo;
    $obj->mostraMensagem();
    //TesteMetodo::mostraMensagem();
?>
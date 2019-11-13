<?php
/**
 * 
 * CLASSE, METODOS E ATRIBUTOS
 * 
 */

 class NomeDaClasse{
    /**
    * atributos
    */    

    public $atributo1;
    
    private $atributo2;

    protected $atributo3;

    const ATRIBUTOCONSTANTE = 'x';

    /**     
     * metodos
     */

    public function metodoDaClasse() {
        echo "Sou um metodo!!!";


    } 
 }
//Instancia de um objeto
 $objeto = new NomeDaClasse();

 $objeto->metodoDaClasse();

?>
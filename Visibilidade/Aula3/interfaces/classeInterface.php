<?php

    require_once 'interfaces.php';

    class Template implements iTemplate
    {
        private $vars = array();

        public function setVariable($nome, $var)
        {
            $this->vars[$nome] = $var;
        }

        public function getHTML($template): string
        {
            foreach ($this->vars as $name => $value) {
                $template = str_replace('{' . $name . '}', $value, $template);
            }
            return $template;
        }
    }
  
    $obj = new Template();
    $obj->setVariable("nome", "TMS");
    $obj->setVariable("email", "teste@teste.com.br");
    $obj->setVariable("telefone", "965831169");  
    $obj->setVariable("endereco", "rua sem numero");    
    $obj->setVariable("final", "FIM"); 

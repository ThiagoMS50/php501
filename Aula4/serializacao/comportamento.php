<?php

class VirarString{
    public function __construct($mensagem){
        $this->foo = $mensagem;
    }
    public function __toString(){
        return 'Eae irmao, quero ir embora String';
    }
    public function __invoke(){
        echo '<br>4 Dias de curso e nao aprendeu ainda??<br>';
    }
}

$obj = new VirarString('oi');
echo $obj;
$obj(34);

?>
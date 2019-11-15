<?php

function autoload(string $class)
{
    $arquivo = "classe/$class.php";
    require_once($arquivo);
}

$colecao = new PalvrasCollection;
$colecao->addItem("Primeiro");
$colecao->addItem("Segundo");
$colecao->addItem("Terceiro");

echo "Ordem de inclusao: <br>";
foreach($colecao->getIterator() as $item){
    echo "$item<br>";
}
?>
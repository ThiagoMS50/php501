<?php

require_once "bootstrap.php";


use Curso\Loja\Entidades\Produto;

$produtos =[
    ['nome' => 'Tv', 'preco'=>2500],
    ['nome' => 'Sound bar', 'preco'=>650],
    ['nome' => 'Suporte TV', 'preco'=>125],
    ['nome' => 'Sound bar', 'preco'=>650]

];

foreach($produtos as $produto){
    $dbProduto = New Produto();

    $dbProduto->setNome($produto['nome']);
    $dbProduto->setPreco($produto['preco']);

    $entityManager->persist($dbProduto);
}

$entityManager->flush();


/*$produtoRepository = $entityManager->getRepository('Curso\Loja\Entidades\Produto');


$produto = $produtoRepository->find(2);
echo "{$produto->getId()}"; 

//$entityManager->remove($produto);
//$entityManager->flush();


//$produto = $produtoRepository->find(3);

echo "<pre>";
//var_dump($produto);*/
   
?>
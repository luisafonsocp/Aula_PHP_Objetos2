<?php 
include_once 'cesta.php'; 
include_once 'produto.php'; 

$produtol = new Produto; 
$produtol->codigo = 1; 
$produtol->descricao = 'Ameixa'; 
$produtol->preco = 1.40; 

$produto2 = new Produto; 
$produto2->codigo = 2; 
$produto2->descricao = 'Morango'; 
$produto2->preco = 2.24;

$produto3 = new Produto; 
$produto3->codigo = 3; 
$produto3->descricao = 'Abacaxi'; 
$produto3->preco = 2.86; 

$produto4 = new Produto; 
$produto4->codigo = 4; 
$produto4->descricao = 'Laranja'; 
$produto4->preco = 1.14; 

$produto5 = new Produto; 
$produto5->codigo = 5; 
$produto5->descricao = 'Banana'; 
$produto5->preco = 2.17; 

$produto6 = new Produto; 
$produto6->codigo = 6; 
$produto6->descricao = ',Melao'; 
$produto6->preco = 5.89; 

$produto7 = new Produto; 
$produto7->codigo = 7; 
$produto7->descricao = 'Melancia'; 
$produto7->preco = 8.00; 

$produto8 = new Produto; 
$produto8->codigo = 8; 
$produto8->descricao = 'Kiwi'; 
$produto8->preco = 7.16; 

$produto9 = new Produto; 
$produto9->codigo = 9; 
$produto9->descricao = 'Pessego'; 
$produto9->preco = 1.10; 

$produto10 = new Produto; 
$produto10->codigo = 10; 
$produto10->descricao = 'Tangerina'; 
$produto10->preco = 4.20; 


$cesta = new Cesta; 
 
$cesta->AdicionaItem($produtol); 
$cesta->AdicionaItem($produto2); 
$cesta->AdicionaItem($produto3); 
$cesta->AdicionaItem($produto4); 
$cesta->AdicionaItem($produto5); 
$cesta->AdicionaItem($produto6); 
$cesta->AdicionaItem($produto7); 
$cesta->AdicionaItem($produto8); 
$cesta->AdicionaItem($produto9); 
$cesta->AdicionaItem($produto10); 
 
echo $cesta->CalculaTotal() , "\n"; 
echo $cesta->ExibeLista(); 
?>
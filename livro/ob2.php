<?php

$produto = new stdClass;
$produto->descrição = 'chocolate amargo';
$produto->estoque = '14';
$produto->preço = 13.40;

$vetor1 = (array) $produto;

$vetor2 = [ 'descricao' => 'Café', 'estoque' => 100, 'preco' => 7 ];
$produto2 = (object) $vetor2;
print_r($produto2->descricao);
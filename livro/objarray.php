<?php 

$produto = array();
$produto['descricao'] = 'Chocolate';
$produto['estoque'] = 15;
$produto['valor'] = 7.52;

$objeto = new stdClass;

foreach ($produto as $chave => $valor){
    $objeto->$chave = $valor;
}
print_r($produto);
print_r($objeto);
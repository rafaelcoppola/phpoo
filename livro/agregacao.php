<?php

require_once __DIR__ . '/classes/cestas.php';
require_once __DIR__ . '/classes/produtos.php';

//criação de cesta
$c1 = new Cestas;

//agregação dos produtos
$c1->addItem($p1 = new Produtos('Chocolate', 10, 7));
$c1->addItem($p1 = new Produtos('Café', 100, 7));
$c1->addItem($p1 = new Produtos('Mostarda', 50, 3));

foreach ($c1->getItens() as $item){
    print 'Item: ' . $item->getDescricao() . "\n";
}

<?php

require_once  __DIR__ .'/classes/produtos.php';
require_once __DIR__ . '/classes/carecteristicas.php';

//criação do objeto
$p1 = new Produtos('Chocolate', 10, 7);

//composição
$p1->addCaracteristicas('Cor', 'Branco');
$p1->addCaracteristicas('Peso', '2.6kg');
$p1->addCaracteristicas('Potencia', '20 wats RMS');

print 'Produto: ' . $p1->getDescricao() . "\n";

foreach($p1->getCaracteristicas() as $c) {
    print 'Caracteristica: ' . $c->getNome() . ' - ' . $c->getValor() . "\n";
}
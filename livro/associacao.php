<?php

require_once __DIR__ . '/classes/fabricante.php';
require_once __DIR__ . '/classes/produtos.php';

//criação do objeto
$p1 = new Produtos('Chocolate', 10, 7);
$f1 = new Fabricante('Chocolate Factory', 'Willy Wonka Street', '1234985235');

//associação
$p1->setFabricante($f1);

echo'A descrição é ' . $p1->getDescricao() . "\n";
echo 'A descrição é ' . $p1->getFabricante()->getNome() . ' '. 'no endereço ' . $p1->getFabricante()->getEndereco() . "\n";

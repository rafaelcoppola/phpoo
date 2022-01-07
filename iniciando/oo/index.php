<?php
require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car('Ferrari','Vermelha','300',);
$ferrari->setDoors(2);

$mustang = new Car('Mustang', 'Preto','250',);
$mustang->setDoors(4);

$moto = new Motorcycle('Honda','Preta','1000');

echo '<pre>';
print_r($ferrari);
print_r($mustang);
print_r($moto);



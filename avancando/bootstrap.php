<?php

require_once('autoload.php');

$name = new Rafael\people\Person;
$name->setName('rafael');
$name->setAge(28);
$name->setWeight(70);

echo '<pre>';
echo $name;
// print_r($name);
// print_r((new \Rafael\DB\MySql)->conect());
// try{
//     (new Rafael\Db\ORM)->select(false);
// }catch (Rafael\MyException $e) {
//     echo $e->getMessage();
// }

// $people = new \Rafael\people\Person;
// $people->setName('Rafael');



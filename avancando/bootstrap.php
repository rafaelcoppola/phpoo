<?php

require_once('autoload.php');

// $name = new Rafael\people\Person;
// $name->setName('Rafael');
// $name->setAge(28);
// $name->setWeight(70);



echo '<pre>';
// print_r((new \Rafael\DB\Db)->conect());
// print_r((new \Rafael\DB\MySql)->conect());
try{
    (new Rafael\Db\ORM)->select(false);
}catch (Rafael\MyException $e) {
    echo $e->getMessage();
}


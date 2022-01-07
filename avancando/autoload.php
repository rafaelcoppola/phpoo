<?php
require __DIR__.'/src/Autoload.php';

$autoload = new Rafael\Autoload;
$autoload->register();
$autoload->addNamespace('Rafael', 'src');
<?php

namespace SON;

class Model
{
    private $pdo;

    private function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    public function get()
    {
        return array(
            'nome' => 'Rafael'
        );
    }
}

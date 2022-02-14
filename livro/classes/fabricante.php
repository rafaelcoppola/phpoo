<?php

class fabricante
{
    private $nome;
    private $endereço;
    private $documento;

    public function __construct($nome, $endereço, $documento)
    {
        $this->nome = $nome;
        $this->endereço = $endereço;
        $this->documento = $documento;
    }

    public function getNome()
    {
        return $this->nome;
    }
}

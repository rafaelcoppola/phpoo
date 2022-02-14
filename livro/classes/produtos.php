<?php

class produtos
{
    private $descricao;
    private $estoque;
    private $preco;
    private $fabricante;

    public function __construct($descricao, $estoque, $preco)
    {
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setFabricante(fabricante $f)
    {
        $this->fabricante = $f;
    }

    public function getFabricante()
    {
        return $this->fabricante;
    }
}

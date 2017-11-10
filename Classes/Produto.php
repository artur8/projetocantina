<?php

class Produto{
    protected $IdProduto;
    protected $Nome;
    protected $Preco;
    protected $IdCategoria;
        
    public function __construct($_IdProduto, $_Nome, $_Preco, $_IdCategoria) {
        $this->IdProduto = $_IdProduto;
        $this->Nome = $_Nome;
        $this->Preco = $_Preco;
        $this->IdCategoria = $_IdCategoria;
    }
    
}
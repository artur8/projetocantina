<?php

require_once 'Produto.php';

class Estoque extends Produto{
    private $IdEstoque;
    private $Quantidade;
    
    
    public function __construct($_IdProduto, $_Nome, $_Preco, $_IdCategoria, $_IdEstoque, $_Quantidade) {
        parent::__construct($_IdProduto, $_Nome, $_Preco, $_IdCategoria);
        $this->IdEstoque = $_IdEstoque;
        $this->Quantidade = $_Quantidade;
    }
}

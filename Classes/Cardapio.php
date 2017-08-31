<?php


class Cardapio{
    private $IdCardapio;
    private $Data;
    private $Produtos;
    
    public function __construct($_IdCardapio, $_Data, $_Produtos) {
        $this->IdCardapio = $_IdCardapio;
        $this->Data = $_Data;
        $this->Produtos = $_Produtos;
    }
}
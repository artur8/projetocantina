<?php

class Categoria{
    private $IdCategoria;
    private $Nome;
    
    public function __construct($_IdCategoria, $_Nome) {
        $this->IdCategoria = $_IdCategoria;
        $this->Nome = $_Nome;
    }
}
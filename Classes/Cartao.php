<?php

require_once 'Usuario.php';

class Cartao extends Usuario{
    private $IdCartao;
    private $Creditos;
    
    public function __construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha, $_IdCartao, $_Creditos) {
        parent::__construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha);
        $this->IdCartao = $_IdCartao;
        $this->Creditos = $_Creditos;
    }
}
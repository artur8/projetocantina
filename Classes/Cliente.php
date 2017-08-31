<?php

require_once 'Usuario.php';

class Cliente extends Usuario{
    private $IdCliente;
    private $Ocupacao;
    
    public function __construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha, $_IdCliente, $_Ocupacao) {
        parent::__construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha);
        $this->IdCliente = $_IdCliente;
        $this->Ocupacao = $_Ocupacao;
    }
}
<?php

require_once 'Usuario.php';

class Administrador extends Usuario{
    private $IdAdministrador;
    private $CNPJ;
    
    public function __construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha, $_IdAdministrador, $_CNPJ) {
        parent::__construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha);
        $this->IdAdministrador = $_IdAdministrador;
        $this->CNPJ = $_CNPJ;
    }
    
    function getIdAdministrador() {
        return $this->IdAdministrador;
    }

    function getCNPJ() {
        return $this->CNPJ;
    }

    function setIdAdministrador($IdAdministrador) {
        $this->IdAdministrador = $IdAdministrador;
    }

    function setCNPJ($CNPJ) {
        $this->CNPJ = $CNPJ;
    }
    
   


}

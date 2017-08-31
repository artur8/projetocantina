<?php

require_once 'Usuario.php';

class Funcionario extends Usuario{
    private $IdFuncionario;
    private $Cargo;
    private $Salario;
    private $CPF;
    private $RG;
    
    public function __construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha, $_IdFuncionario, $_Cargo, $_Salario, $_CPF, $_RG) {
        parent::__construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha);
        $this->IdFuncionario = $_IdFuncionario;
        $this->Cargo = $_Cargo;
        $this->Salario = $_Salario;
        $this->CPF = $_CPF;
        $this->RG = $_RG;
    }
}
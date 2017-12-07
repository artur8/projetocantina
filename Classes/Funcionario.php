<?php

require_once 'Usuario.php';

class Funcionario extends Usuario{
    private $IdFuncionario;
    private $Salario;
    
    public function __construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha, $_CPF, $_idFuncionario, $_Salario) {
        parent::__construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha, $_CPF);
        $this->IdFuncionario = $_idFuncionario;
        $this->Salario = $_Salario;
    }
                
    function getIdFuncionario() {
        return $this->IdFuncionario;
    }

    function getSalario() {
        return $this->Salario;
    }

    function setIdFuncionario($IdFuncionario) {
        $this->IdFuncionario = $IdFuncionario;
    }

    function setSalario($Salario) {
        $this->Salario = $Salario;
    }

        
    function VerificaLogin($link){
        
    }
  
        
        
    }
    


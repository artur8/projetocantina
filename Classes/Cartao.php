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
    function getIdCartao() {
        return $this->IdCartao;
    }

    function getCreditos() {
        return $this->Creditos;
    }

    function setIdCartao($IdCartao) {
        $this->IdCartao = $IdCartao;
    }

    function setCreditos($Creditos) {
        $this->Creditos = $Creditos;
    }
    
    public function gethuhu($link){
        $CPF = filter_input(INPUT_GET,"inputCPF");
        $query = "SELECT * From Usuario as u INNER JOIN Cartao as c ON u.idUsuario = c.idCliente AND u.CPF =$CPF;";
        $resultado = $link->query($query);
        $linha = $resultado->fetch_array();
        return $linha;
        
        
    }


}
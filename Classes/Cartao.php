<?php
require_once 'Usuario.php';

class Cartao extends Usuario{
    private $IdCartao;
    private $Creditos;
    
    public function __construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha, $_CPF, $_IdCartao, $_Creditos) {
        parent::__construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha, $_CPF);
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

    
function montaRecarga($link){
      $cpf = $_GET["cpf"];
        $query = "SELECT Nome, Saldo, idCartao, CPF FROM Usuario as u INNER JOIN Cliente as c ON u.idUsuario = c.idUsuario"
                . " INNER JOIN Cartao as ca ON ca.idCliente = c.idCliente WHERE CPF='" . $cpf ."';";
         $resultado=$link->query($query);
          $result = $resultado->fetch_array();
        
        echo' <div class="form-group row">
           <label class="col-sm-3 form-control-label">Nome</label>
           <div class="col-sm-9">
             <input type="text" name="nome" disabled="" placeholder="' . $result["Nome"] . '" class="form-control">
           </div>
         </div>

         <!-- SALDO  - DISABLED -->
         <div class="form-group row">
           <label class="col-sm-3 form-control-label">Saldo atual</label>
           <div class="col-sm-9">
             <input type="text" name="saldo" disabled="" placeholder="' . $result["Saldo"] . '" class="form-control">
           </div>
         </div>';
        
        $this->Creditos = $result["Saldo"];
        $this->IdCartao = $result["idCartao"];
        $this->CPF = $result["CPF"];
        $_SESSION["cartao"] = $result["idCartao"];
        $_SESSION["saldo"] = $result["Saldo"];
}

    public function Recarregar($link, $valor){
        $NovoValor = $this->Creditos + $valor;
        $query = "UPDATE Cartao SET Saldo = $NovoValor WHERE idCartao=$this->IdCartao;";
        $link->query($query);
        
    }
}

<?php

require_once 'Usuario.php';
require_once '../Includes/conexao.php';

class Cliente extends Usuario{
    private $IdCliente;
    private $Ocupacao;
    
    public function __construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha, $_IdCliente, $_Ocupacao) {
        parent::__construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha);
        $this->IdCliente = $_IdCliente;
        $this->Ocupacao = $_Ocupacao;
    }
    
    public function SetCargo($_Cargo){
        $this->Ocupacao = $_Cargo;
    }
    
    public function GetCargo(){
        return $this->Ocupacao;
    }
    
    public function CadastroCliente($link){
        parent::CadastroUsuario($link);
        $query = "INSERT INTO Cliente VALUES (NULL, $this->IdUsuario, '$this->Ocupacao')";
        $link->query($query) or die ($link->error);
    }
    
    public function FormularioCliente(){
        parent::Formulario();
        
     echo "Cargo: <input type='text' name='Cargo'>
      <input type='submit' value='enviar' name='Enviar'>
      </form>"; 
    }

    }

function montaRecarga($link){
    echo 'alert(oi)';
    $cpf = $_GET["cpf"];
        $query = "SELECT Nome, Saldo FROM Usuario as u INNER JOIN Cliente as c ON u.idUsuario = c.idUsuario"
                . " INNER JOIN Cartao as ca ON ca.idCliente = c.idCliente WHERE CPF='" . $cpf ."';";
        $resultado=$link->query($query);
        echo' <div class="form-group row">
           <label class="col-sm-3 form-control-label">Nome</label>
           <div class="col-sm-9">
             <input type="text" name="nome" id="nome" disabled="" placeholder="' . $resultado["Nome"] . '" class="form-control">
           </div>
         </div>

         <!-- SALDO  - DISABLED -->
         <div class="form-group row">
           <label class="col-sm-3 form-control-label">Saldo atual</label>
           <div class="col-sm-9">
             <input type="text" name="saldo" id="saldo" disabled="" placeholder="' . $resultado["CPF"] . '" class="form-control">
           </div>
         </div>';
        }
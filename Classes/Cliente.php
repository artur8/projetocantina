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

class Cliente extends Usuario{
    private $IdCliente;
    private $Ocupacao;
    
    public function __construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha, $_IdCliente, $_Ocupacao) {
        parent::__construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha);
        $this->IdCliente = $_IdCliente;
        $this->Ocupacao = $_Ocupacao;
    }
}


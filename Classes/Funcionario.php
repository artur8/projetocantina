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

    
    function getIdFuncionario() {
        return $this->IdFuncionario;
    }

    function getCargo() {
        return $this->Cargo;
    }

    function getSalario() {
        return $this->Salario;
    }

    function getCPF() {
        return $this->CPF;
    }

    function getRG() {
        return $this->RG;
    }

    function setIdFuncionario($IdFuncionario) {
        $this->IdFuncionario = $IdFuncionario;
    }

    function setCargo($Cargo) {
        $this->Cargo = $Cargo;
    }

    function setSalario($Salario) {
        $this->Salario = $Salario;
    }

    function setCPF($CPF) {
        $this->CPF = $CPF;
    }

    function setRG($RG) {
        $this->RG = $RG;
    }
    
    public function CadastroFuncionario($link){
        parent::CadastroUsuario($link);
        $query = "INSERT INTO Funcionario VALUES ('NULL', '$this->IdUsuario', '$this->Cargo', '$this->Salario', '$this->RG', '$this->CPF');";
        echo $query;
        $link->query($query) or die($link->error);
    }
    
    public function FormularioFuncionario(){
        parent::Formulario();
        echo "Cargo:
                <br><input type='text' name='Cargo'><br>
              CPF: 
                <br><input type='text' name='CPF'><br>
              RG:
                <br><input type='text' name='RG'><br>
              Salário: 
                <br><input type='text' name='Salario'><br>
              <input type='submit' name='Enviar'>
              </form>";
    }
    public function DeletarFuncionario($link){
            $query1 = "SELECT idUsuario FROM Usuario WHERE Email like '$this->Email';";  
            echo $query1;
            $id= $link->query($query1) or die($link->error);
          
           
            $query2 = "DELETE FROM Funcionario WHERE idUsuario = '$id';";
            echo $query2;
            $link->query($query2) or die($link->error);
            parent:: DeletarUsuario($link);
    }

}

<?php
//session_start();
//require_once '../../../Includes/conexao.php';
require_once '../Includes/conexao.php';
//require_once '../../../Includes/conexao.php';
class Usuario{
    protected $IdUsuario;
    protected $Nome;
    protected $Email;
    protected $Senha;
    protected $DataNasc;
    protected $CPF;






    public function __construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha, $_CPF) {
        $this->IdUsuario = $_IdUsuario;
        $this->Nome = $_Nome;
        $this->DataNasc = $_DataNasc;
        $this->Email = $_Email;
        $this->Senha = $_Senha;
        $this->CPF = $_CPF;
    }
    
    public function GetIdUsuario(){
        return $this->IdUsuario;
    }
    public function GetNome(){
        return $this->Nome;
    }
    public function SetNome($_Nome){
        $this->Nome = $_Nome;
    }
    public function GetDataNasc(){
        return $this->DataNasc;
    }
    public function SetDataNasc($_DataNasc){
        $this->DataNasc = $_DataNasc;
    }
    public function GetEmail(){
        return $this->Email;
    }
    public function SetEmail($_Email){
        $this->Email = $_Email;
    }
    public function GetSenha(){
        return $this->Senha;
    }
    public function SetSenha($_Senha){
        $this->Senha = $_Senha;
    }
    public function GetCPF (){
       return $this->CPF;
    }
    public function SetCPF($_CPF){
        $this->CPF = $_CPF;
    }
    

    public function Login($link){
        $query = "SELECT * FROM Usuario AS U INNER JOIN Funcionario AS F ON F.idUsuario = U.idUsuario "
                 ."WHERE Email LIKE '$this->Email' AND Senha LIKE '$this->Senha';";
        //echo "<h1>Funcionario " .$query . "</h1>";
        $resultado = $link->query($query) ;
        
    if($link->affected_rows == 1){
        $linha = $resultado->fetch_array();
        $_SESSION['Nome'] = $linha['NomeUsuario'];
        $_SESSION['Email'] = $this->Email;
        setcookie('LogadoFuncionario', 1, time()+60*10);
        header("Location:index_funcionario.php");
        
    } else {
        
        $query = "SELECT * FROM Usuario AS U INNER JOIN Administrador AS A ON A.idUsuario = U.idUsuario "
                . "WHERE Email LIKE '$this->Email' AND Senha LIKE '$this->Senha'; ";
        //echo "<h1>Adm  " .$query . "</h1>";
        $resultado = $link->query($query);
        if($link->affected_rows == 1){
            $linha = $resultado->fetch_array();
            $_SESSION['Nome'] = $linha['NomeUsuario'];
            $_SESSION['Email'] = $this->Email;
            setcookie('LogadoAdmin', 1, time()+60*10);
            header("Location:index_admin.php");
        
     } 
     }
     }
    
      public function CadastroUsuario($link){ 
            $query = "INSERT INTO Usuario VALUES (NULL, '$this->Nome', '$this->DataNasc', '$this->Email', '$this->Senha')";
            $link->query($query) or die ($link->error);
            $this->IdUsuario = $link->insert_id;
      }
    
      
      public function DeletarUsuario($link){
          $query = "DELETE FROM Usuario WHERE Email like '$this->Email';";
          $link->query($query) or die($link->error);
      }
      
}
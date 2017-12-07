<?php

require_once '../Includes/conexao.php';

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
        $_SESSION['Nome'] = $linha['Nome'];
        $_SESSION['Email'] = $this->Email;
        setcookie('Logado', 1, time()+60*10);
        header("Location:index2.php");
        
    } else if($link->affected_rows == 0){
        
        $query = "SELECT * FROM Usuario AS U INNER JOIN SuperAdm AS S ON S.idUsuario = U.idUsuario "
                . "WHERE Email LIKE '$this->Email' AND Senha LIKE '$this->Senha'; ";
        $resultado = $link->query($query);
        if($link->affected_rows == 1){
            $linha = $resultado->fetch_array();
            $_SESSION['Nome'] = $linha['Nome'];
            $_SESSION['Email'] = $this->Email;
            setcookie('Logado', 2, time()+60*10);
            header("Location:index2.php");
        
     } else{
         echo "alert('Login inválido')";
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
      
      public function UpdateUsuario($link){
          $query = "UPDATE Usuario SET Nome='". $this->Nome . "', Email= '" .$this->Email. "', Senha =' " . $this->Senha."',"
                  . " DataNasc ='".$this->DataNasc. "', CPF='" . $this->CPF . "' WHERE idUsuario = $this->IdUsuario;";
         // echo "<h1>" . $query . "</h1>";
          $link->query($query) or die ($link->error);
          
      }
      
      public function Verifica(){
          if(empty($_COOKIE['Logado']) || empty($_SESSION['Nome']) ){
              return FALSE;
          }
          else {
              return TRUE;
          }
      }

     
      
}
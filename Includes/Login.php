<?php
session_start();
require_once 'conexao.php';
function VerificaEmail ($link,$Email,$Senha){
    $query = "SELECT * FROM Usuario "
           . "WHERE Email LIKE '$Email' AND Senha LIKE '$Senha'";
    $resultado = mysqli_query($link, $query) or die(mysqli_error($link));
    if(mysqli_num_rows($resultado) == 1){
        return TRUE;
    } 
    else {
        return FALSE;
    }
}

  function login (){
    if(!empty($_POST["Login"])){
        $Email = $_POST["Email"];
        $Senha = md5($_POST["Senha"]);
      
    if(VerificaEmail($link, $Email, $Senha) == TRUE){
        $_SESSION["Email"] = $Email;
        setcookie("Logado",1,time()+30);
        header("Location:../Template/Template/web/index.php");  
    } 
    else {
      echo "Vaza!";    
    }
  }
  }
?>

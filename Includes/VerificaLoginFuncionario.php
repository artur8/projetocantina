<?php

session_start();

function VerificaLogin(){
    if(empty($_SESSION["Email"]) && empty($_COOKIE["LogadoFuncionario"])){
        header("Location:login.php");
    }
}
VerificaLogin();


?>
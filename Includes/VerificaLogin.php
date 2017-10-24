<?php

session_start();

function VerificaLogin(){
    if(empty($_SESSION["Email"]) && empty($_COOKIE["Logado"])){
        header("Location:login.php");
    }
}
VerificaLogin();


?>
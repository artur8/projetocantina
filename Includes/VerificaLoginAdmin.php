<?php

session_start();

function VerificaLogin(){
    if(empty($_SESSION["Email"]) && empty($_COOKIE["LogadoAdmin"])){
        header("Location:login.php");
    }
}
VerificaLogin();


?>
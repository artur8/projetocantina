<?php

session_start();
$valor = $_GET["valor"];

if(empty($_SESSION["ValorTotal"])){
    $_SESSION["ValorTotal"] = $valor;
}
else{
    $_SESSION["ValorTotal"]= $_SESSION["ValorTotal"] + $valor;
    
}
echo $_SESSION["ValorTotal"];
?>
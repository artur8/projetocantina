<?php

session_start();
session_destroy();
if(!empty($_COOKIE['Logado'])){
    setcookie('Logado',1,time()-60);
}
header('Location:login.php');

?>
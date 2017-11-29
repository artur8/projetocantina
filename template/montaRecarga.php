<?php

session_start();

require_once "../Classes/Cartao.php";

$ObjCartao = new Cartao(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
$ObjCartao->montaRecarga($link);

?>
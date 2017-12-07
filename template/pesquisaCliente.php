<?php
    
    require_once '../Includes/conexao.php';
    require_once '../Classes/Cliente.php';
    
    $objCliente = new Cliente(Null, Null, Null, Null, Null, Null, Null, Null);
    $objCliente->TabelaPesquisa($link);
    ?>
    
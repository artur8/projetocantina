<?php

require_once '../Includes/conexao.php';
require_once 'Cliente.php';

 $ObjCliente = new Cliente(NULL,NULL, NULL,NULL, NULL, NULL, NULL); 
 $ObjCliente->FormularioCliente();
 
 if (!empty(filter_input(INPUT_POST,'Enviar'))){
     $ObjCliente->SetNome(filter_input(INPUT_POST, 'Nome'));
     $ObjCliente->SetDataNasc(filter_input(INPUT_POST,'Data'));
     $ObjCliente->SetEmail(filter_input(INPUT_POST,'Email'));
     $ObjCliente->SetSenha(filter_input(INPUT_POST, 'Senha'));
     $ObjCliente->SetCargo(filter_input(INPUT_POST, 'Cargo'));

     echo $ObjCliente->GetNome();
     $ObjCliente->CadastroCliente($link);
 }
 
 ?>



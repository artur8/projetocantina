<?php
    require_once '../Includes/conexao.php';
    require_once 'Funcionario.php';
    require_once 'Usuario.php';
    
    
      //CADASTRAR FUNCIONARIO
    $ObjFuncionario = new Funcionario(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
    $ObjFuncionario->FormularioFuncionario();
    
    if(!empty(filter_input(INPUT_POST,'Enviar'))){
        $ObjFuncionario->SetDataNasc(filter_input(INPUT_POST,'Data'));
        $ObjFuncionario->SetEmail(filter_input(INPUT_POST,'Email'));
        $ObjFuncionario->SetNome(filter_input(INPUT_POST,'Nome'));
        $ObjFuncionario->SetSenha(filter_input(INPUT_POST,'Senha'));
        $ObjFuncionario->setCPF(filter_input(INPUT_POST, 'CPF'));
        $ObjFuncionario->setRG(filter_input(INPUT_POST,'RG'));
        $ObjFuncionario->setCargo(filter_input(INPUT_POST,'Cargo'));
        $ObjFuncionario->setSalario(filter_input(INPUT_POST,'Salario'));
        
       $ObjFuncionario->CadastroFuncionario($link);
    }
    
    
      /*  //UPDATE DE FUNCIONARIO
    $ObjFuncionario = new Funcionario(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
    $ObjFuncionario->Form_deletar();
    
    if(!empty(filter_input(INPUT_POST, 'Excluir'))){
        $ObjFuncionario->SetEmail(filter_input(INPUT_POST,'Email'));
        
        $ObjFuncionario->DeletarFuncionario($link);
    }

?>


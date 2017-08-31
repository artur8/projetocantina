<?php

public function VerificaLogin($link){
    $query = "SELECT * FROM pessoa WHERE Email LIKE '$this->Email' AND Senha LIKE '$this->Senha'";
    $resultado = $link->query($query);
    if($link->affected_rows == 1){
        $linha = $resultado->fetch_array();
        $_SESSION['Nome'] = $linha['Nome'];
        $_SESSION['Email'] = $this->Email;
        setcookie('Logado', 1, time()+60*10);
        return TRUE;
    }else{
        return FALSE;
    }
            
            
}
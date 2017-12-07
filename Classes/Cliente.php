<?php

require_once 'Usuario.php';
require_once '../Includes/conexao.php';

class Cliente extends Usuario{
    private $IdCliente;
    private $Ocupacao;
    
    public function __construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha,$_CPF, $_IdCliente, $_Ocupacao) {
        parent::__construct($_IdUsuario, $_Nome, $_DataNasc, $_Email, $_Senha, $_CPF);
        $this->IdCliente = $_IdCliente;
        $this->Ocupacao = $_Ocupacao;
    }
    
    public function SetCargo($_Cargo){
        $this->Ocupacao = $_Cargo;
    }
    
    public function GetCargo(){
        return $this->Ocupacao;
    }
    
    public function CadastroCliente($link){
        parent::CadastroUsuario($link);
        $query = "INSERT INTO Cliente VALUES (NULL, $this->IdUsuario, '$this->Ocupacao')";
        $link->query($query) or die ($link->error);
    }
    
    public function UpdateCliente($link){
        parent:: UpdateUsuario($link);
        $query = "UPDATE Cliente SET Ocupacao ='$this->Ocupacao' WHERE idUsuario = $this->IdUsuario;";
       // echo '<h1>' . $query . "</h1>";
        $link->query($query) or die ($link->error);
      /*$id = filter_input(INPUT_GET,"id");  
      $query = "update Usuario as U SET Nome =' $this->Nome'  WHERE U.idUsuario = $id;";
      $link->query($query);*/
    }
    
    public function FormularioCliente(){
        parent::Formulario();
        
     echo "Cargo: <input type='text' name='Cargo'>
      <input type='submit' value='enviar' name='Enviar'>
      </form>"; 
    }
    
    public function MontaTabelaClientes($link){
        $query= "SELECT * FROM Usuario as u inner join Cliente as c ON c.idUsuario =  u.idUsuario ORDER BY Nome;";
        $resultado = $link->query($query);
        
        while($linha=$resultado->fetch_array()){
            echo "<tr>".
                    "<td><a href='FormClientePreenchido.php?id=".$linha["idUsuario"] ."'>". $linha["Nome"] . "</a></td>".
                    "<td>" . $linha["CPF"] . "</td>".
                    "<td>" . $linha["Ocupacao"] . "</td>".
                    "</tr>";
        }
        
        echo "</table>";
        
    }
    
    public function TabelaPesquisa($link){
    $busca = filter_input(INPUT_GET,"busca");
    if(strlen($busca)>3){
    $query="SELECT * FROM cliente where Descricao like '" . $busca . "%';";
    $resultado = $link->query($query);
    echo ' <div style="margin-left: 5%; width:90%; " >'
    . ' <table class="table table-striped">
                        <thead>
                          <label>Lanches</label>
                          <tr>
                            <th>Produtos</th>
                            <th>Preço</th>
                            <th>Categoria</th>
                          </tr>
                        </thead>
                        <tbody>';
    while($linha = $resultado->fetch_array()){
        echo "<tr>"
        . "<td><a href='FormClientePreenchido.php?id=" . $linha["idUsuario"]. ">" . $linha["Nome"]. "</a></td>"
        . "<td" . $linha["CPF"]. "</td>"
        ."<td>". $linha["ocupacao"]. "</td>";
    }
    echo "</table>";
    
    }
    }

    
    public function FormPreenchido($link){
        $id = filter_input(INPUT_GET, "id");
        $query="SELECT * FROM Usuario as u inner join Cliente as c ON c.idUsuario =  u.idUsuario WHERE c.idUsuario=$id;";
        $linha = $link->query($query);
        $resultado= $linha->fetch_array();
        echo ' <div class="form-group row" style="padding-top: 10%">
                <label class="col-sm-3 form-control-label">Nome</label>
                <div class="col-sm-9">
                    <input type="text" name="nomeCliente" class="form-control" value="' . $resultado["Nome"].'">
                 </div>
               </div>

             <!-- EMAIL - ENABLED -->
            <div class="form-group row">
            <label class="col-sm-3 form-control-label">E-mail</label>
            <div class="col-sm-9">
                <input type="text" name="emailCliente" class="form-control" value="'. $resultado["Email"] . '">
            </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-3 form-control-label">Ocupação</label>
                <div class="col-sm-9">
                    <input type="text" name="ocupacao" class="form-control" value="' . $resultado["Ocupacao"].'">
                 </div>
               </div>
              <!-- SENHA - ENABLED -->
            <div class="form-group row">
            <label class="col-sm-3 form-control-label">Senha</label>
            <div class="col-sm-9">
                <input type="password" name="senhaCliente" class="form-control" value="' . $resultado["Senha"].'">
            </div>
            </div>

            <!-- DATA DE NASCIMENTO - ENABLED -->
            <div class="form-group row">
            <label class="col-sm-3 form-control-label">Data de nascimento</label>
            <div class="col-sm-9">
                <input type="date" name="dataNascCliente" class="form-control" value="' . $resultado["DataNasc"]. '">
            </div>
            </div>

            <!-- CPF - ENABLED -->
            <div class="form-group row">
            <label class="col-sm-3 form-control-label">CPF</label>
            <div class="col-sm-9">
                <input type="text" name="cpfCliente" class="form-control" value="'. $resultado["CPF"] . '">
            </div>
            </div>';
    }
    }


<?php

class Produto{
    protected $IdProduto;
    protected $Nome;
    protected $Preco;
    protected $IdCategoria;
        
    public function __construct($_IdProduto, $_Nome, $_Preco, $_IdCategoria) {
        $this->IdProduto = $_IdProduto;
        $this->Nome = $_Nome;
        $this->Preco = $_Preco;
        $this->IdCategoria = $_IdCategoria;
    }
    function getIdProduto() {
        return $this->IdProduto;
    }

    function getNome() {
        return $this->Nome;
    }

    function getPreco() {
        return $this->Preco;
    }

    function getIdCategoria() {
        return $this->IdCategoria;
    }

    function setIdProduto($IdProduto) {
        $this->IdProduto = $IdProduto;
    }

    function setNome($Nome) {
        $this->Nome = $Nome;
    }

    function setPreco($Preco) {
        $this->Preco = $Preco;
    }

    function setIdCategoria($IdCategoria) {
        $this->IdCategoria = $IdCategoria;
    }
    
   public function InsereProdutoBD($link){
        $query = "INSERT INTO produto VALUES (NULL, '$this->Nome', '$this->Preco', '$this->IdCategoria');";
        $link->query($query);
        if($link->affected_rows==1){
   ?>
          <script>
              alert("Produto cadastrado!");
          </script>
    <?php
        }
        else{
    ?>
          <script>
              alert("Erro! Tente novamente.");
          </script>
    <?php 
        }
       
    }
   
    
   public function SelectCategoria($link){
        $query = "select * from Categoria;";
        $resultado=$link->query($query);
        while($linha=$resultado->fetch_array()){
            echo "<option value='" . $linha['idCategoria']. "'>" .$linha['NomeCategoria'] ."</option>";
        }
        
    }

    
}
<?php

class Cardapio{
    private $IdCardapio;
    private $Data;
    private $Produtos;
    
    public function __construct($_IdCardapio, $_Data, $_Produtos) {
        $this->IdCardapio = $_IdCardapio;
        $this->Data = $_Data;
        $this->Produtos = $_Produtos;
    }
    function getIdCardapio() {
        return $this->IdCardapio;
    }

    function getData() {
        return $this->Data;
    }

    function getProdutos() {
        return $this->Produtos;
    }

    function setIdCardapio($IdCardapio) {
        $this->IdCardapio = $IdCardapio;
    }

    function setData($Data) {
        $this->Data = $Data;
    }

    function setProdutos($Produtos) {
        $this->Produtos = $Produtos;
    }

        
    public function MontaTabelaLanches($link){
        $query = "select p.descricao, p.valor, c.NomeCategoria
            from produto as p inner join categoria as c 
            ON p.idCategoria = c.idCategoria AND c.NomeCategoria <> 'Bebidas' ORDER BY p.Descricao;";
        $resultado = $link->query($query);
        while($linha=$resultado->fetch_array()){
            echo "<tr>  
                    <td>" . $linha["descricao"]."</td>
                    <td>" . $linha["valor"] ."</td>
                    <td>
                        <form> 
                            <input style='width:50px' min='0'  type='number' onClick='Preco(this.value," . $linha['valor'] . ")'>
                        </form>
                    </td>
                   </tr>";
        }
    }
    
    public function MontaTabelaBebidas($link){
        $query = "select p.descricao, p.valor, c.NomeCategoria "
                . "from produto as p inner join categoria as c ON"
                . " p.idCategoria = c.idCategoria AND c.NomeCategoria = 'Bebidas' ORDER BY p.Descricao;";
       $resultado=$link->query($query);
        while($linha=$resultado->fetch_array()){
            echo "<tr>  
                    <td>" . $linha["descricao"]."</td>
                    <td>" . $linha["valor"] ."</td>
                    <td>
                        <form> 
                            <input style='width:50px' min='0'  type='number' onClick='Preco(this.value," . $linha['valor'] . ")'>
                        </form>
                    </td>
                   </tr>";
        }
    }
    
    public function MontarCardapios ($link){
        $query= "SELECT NomeCategoria FROM Categoria ORDER BY NomeCategoria;";
        $Categoria = $link->query($query);
        $resultado = " ";
        while ($linha = $Categoria->fetch_array()) {
            $posicao = $linha ["NomeCategoria"];
            $query = "select * from produto as p "
                    . "inner join categoria as c "
                    . "ON p.idCategoria = c.idCategoria AND c.NomeCategoria = '" . $posicao. "' ORDER BY p.Descricao;";
            $resultado = $link->query($query);
            
            echo "<tr>" . $posicao . "<tr>";
            
            while($row=$resultado->fetch_array()){
                echo "<tr>"
                . "<td>" . $row["Descricao"] . "</td>"
                . "<td>" . $row["Valor"] . "</td>"
                . "<td><input type='number' min='0' name='" . $row["idProduto"]. "' value='0'></td>"
                . "</tr>";
              
            }
            echo "</table><table class='table table-striped'>";           
        }
    }
    
    
}
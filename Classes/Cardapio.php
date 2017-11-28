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
        $Cat = "";
        while ($linha = $Categoria->fetch_array()) {
            $posicao = $linha ["NomeCategoria"];
            $query = "select * from produto as p "
                    . "inner join categoria as c "
                    . "ON p.idCategoria = c.idCategoria AND c.NomeCategoria = '" . $posicao. "' ORDER BY p.Descricao;";
            $resultado = $link->query($query);
            
           // echo "<tr>" . $posicao . "<tr>";
            
            while($row=$resultado->fetch_array()){
                
                if($Cat != $row["NomeCategoria"]){
                    echo "<tr>
                          <td colspan='3' style='background-color:#88dda2; color:black; '><b> " . $row["NomeCategoria"] . "</b></td>
                          </tr>";
                          $Cat =  $row["NomeCategoria"];
                }
                
                echo "<tr>"
                . "<td>" . $row["Descricao"] . "</td>"
                . "<td>" . $row["Valor"] . "</td>"
                . "<td>
                   <div class='center'>
                   <div class='input-group'>
                   <span class='input-group-btn'>
                   <button type='button' class='btn btn-default btn-number' disabled='disabled' data-type='minus' data-field='quant[1]'>
                   <span class='glyphicon glyphicon-minus'></span>
                   </button>
                   </span>
                   <input type='text' name='quant[1]' class='form-control input-number' value='1' min='1' max='10'>
                   <span class='input-group-btn'>
                   <button type='button' class='btn btn-default btn-number' data-type='plus' data-field='quant[1]'>
                   <span class='glyphicon glyphicon-plus'></span>
                   </button>
                   </span>
                   </div></td>" . "</tr>";
                
              
            }
            
        }
        //<input type='number' min='0' name='" . $row["idProduto"]. "' value='0'>
    }
    
    
}
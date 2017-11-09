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
    
    //Criar __construct e get set
    public function MontaTabelaLanches($link){
        $query = "select p.descricao, p.valor, c.Descricao
            from produto as p inner join categoria as c 
            ON p.idCategoria = c.idCategoria AND c.descricao <> 'Bebidas';";
        $resultado = $link->query($query);
        while($linha=$resultado->fetch_array()){
            echo "<tr>  
                    <td>" . $linha["descricao"]."</td>
                    <td>" . $linha["valor"] ."</td>
                    <td>
                        <form> 
                            <input style='width:50px' min='0'  type='number'>
                        </form>
                    </td>
                   </tr>";
        }
    }
    
    public function MontaTabelaBebidas($link){
        $query = "select p.descricao, p.valor, c.Descricao "
                . "from produto as p inner join categoria as c ON"
                . " p.idCategoria = c.idCategoria AND c.descricao = 'Bebidas';";
       $resultado=$link->query($query);
        while($linha=$resultado->fetch_array()){
            echo "<tr>  
                    <td>" . $linha["descricao"]."</td>
                    <td>" . $linha["valor"] ."</td>
                    <td>
                        <form> 
                            <input style='width:50px' min='0'  type='number'>
                        </form>
                    </td>
                   </tr>";
        }
    }
}
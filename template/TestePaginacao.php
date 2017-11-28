<?php
  
    require_once "../Includes/conexao.php";
    
    $query2="select * from produto as p inner join categoria as c ON p.idCategoria = c.idCategoria ORDER BY c.idCategoria;";
    $produtos = $link->query($query2);
    $num_rows = $produtos->num_rows;
    echo $num_rows . "<br>";
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 
    $numPaginas = ceil($num_rows/4);
    $cont=0;
    $proximo=4;
    
        echo "<table> ";
    
    while($cont != 4){
       // echo $cont . "<br>";
        $proximo = $proximo +4;
       // echo $proximo;
        $query="select * from produto as p inner join categoria as c ON p.idCategoria = c.idCategoria"
                . " ORDER BY c.idCategoria LIMIT $proximo,10;";
        echo $proximo;
        
   // $total= $link->query($query2);
    $resultado= $link->query($query);

//    $inicio = ($itens*$pagina)-$itens;
    
while($linha=$produtos->fetch_array()){
//while(){
             echo "<tr>  
            <td>" . $linha["Descricao"]."</td>
            <td>" . $linha["Valor"] ."</td>
            <td>" . $linha["NomeCategoria"] ."</td>
            <td>
                <form> 
                    <input style='width:50px' min='0'  type='number'>
                </form>
            </td>
</tr>";}
    $cont++;
    /*
    $query="select * from produto as p inner join categoria as c ON p.idCategoria = c.idCategoria ORDER BY c.idCategoria;";
    $query2="select COUNT(*) from produto as p inner join categoria as c ON p.idCategoria = c.idCategoria ORDER BY c.idCategoria;";
    
    $total= $link->query($query2);
    $resultado= $link->query($query);
    
    $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1; 
   
    $numPaginas = ceil($total/10);
//    $inicio = ($itens*$pagina)-$itens;
    
    echo "<table> ";
while($linha=$resultado->fetch_array()){
             echo "<tr>  
            <td>" . $linha["Descricao"]."</td>
            <td>" . $linha["Valor"] ."</td>
            <td>" . $linha["NomeCategoria"] ."</td>
            <td>
                <form> 
                    <input style='width:50px' min='0'  type='number'>
                </form>
            </td>
</tr>";}*/
    
    
   // echo $total;
    }
     for($i = 1; $i < $numPaginas + 1; $i++) { 
        echo "<a href='TestePaginacao.php?pagina=$i'>".$i."</a> "; 
    echo "</table>";
    }
?>
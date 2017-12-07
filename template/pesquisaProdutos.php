<?php
    
    require_once '../Includes/conexao.php';
   
    $busca = $_GET["busca"];
    if(strlen($busca)>3){
      
    $query="SELECT * FROM produto where Descricao like '" . $busca . "%';";
    $resultado =$link->query($query);
    echo ' <div style="margin-left: 5%; width:90%; " >'
    . ' <table class="table table-striped">
                        <thead>
                          <label>Lanches</label>
                          <tr>
                            <th>Produtos</th>
                            <th>Preço</th>
                          </tr>
                        </thead>
                        <tbody>';
    while($linha=$resultado->fetch_array()){
        echo "<tr>"
        . "<td>" . $linha["Descricao"]. "</td>"
        . "<td>" . $linha["Valor"]. "</td>"
        . "<td>
                <form> 
                    <input style='width:50px' min='0'  type='number' onClick='Preco(this.value," . $linha['Valor'] . ")'>
                </form>
           </td>" ;
    }
    echo "</table>";
    
    }
   else{
       echo " ";
   }
    ?>
    



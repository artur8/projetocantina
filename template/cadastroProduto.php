<!DOCTYPE html>
 
<html>
     
    <?php
    require_once 'head.php';
    require_once '../Classes/Produto.php';
    require_once 'cabecalho.php';
    require_once 'menu.php';
    require_once '../Includes/conexao.php';
    
    
?>
           
    
  <body>
      <div class="page home-page">
      <!-- Main Navbar-->
        <div class="card-header d-flex align-items-center" style="width: 90%; height:50%; margin: auto; margin-top: 3%;"> 
              
            <div class="card-body style">
                  
                <!-- INICIO DO FORM -->  
                <form class="form-horizontal" method="POST">
                       
                    <!-- NOME DO PRODUTO - ENABLED -->
                    <div class="form-group row">
                              
                        <label class="col-sm-3 form-control-label">Nome do Produto</label>
                        <div class="col-sm-9">
                            <input type="text" name="nomeProduto" placeholder="Digite aqui..." class="form-control">
                        </div><br><br><br>
                        <label class="col-sm-3 form-control-label">Preço</label>
                        <div class="col-sm-9">
                            <input type="integer" name="precoProduto" placeholder="Digite aqui..." class="form-control">
                        </div>
                            
                    </div>
                       
                    <div class="line"></div>
                    <div class="line"></div>
                        
                        
                <!-- TIPO - RADIO -->
                <br><div class="form-group row">
                        <label class="col-sm-3 form-control-label">Tipo <br><small class="text-primary">Selecione</small></label>
                        
                        <div class="col-sm-9">

                            <select name="Categorias" class="form-control" onchange="categoria(this.value)">
                                <option value="nada"> </option>
                                    <option value="cadastrar" name="cadastrar"> Cadastrar Categoria</option>
                                <?php
                                     $ObjProduto = new Produto(NULL, NULL, NULL, NULL);
                                     $ObjProduto->SelectCategoria($link);
                                ?>
                            </select>
                            
       
                        </div>
            
                    </div>
                <div id="cadastraCategoria">
                    
                </div>
                
                <!-- CANCELAR E SALVAR - BUTTON -->
                <br><br><div class="form-group row">
                            <button type="submit" class="btn btn-secondary">Cancelar</button> &nbsp;
                            <INPUT name="Cadastrar" type="submit" class="btn btn-primary" value="Cadastrar">
                            <?php 
                                if(!empty($_POST["Cadastrar"])){
                                    $ObjProduto->setIdCategoria(filter_input(INPUT_POST,"Categorias"));
                                    $ObjProduto->setNome(filter_input(INPUT_POST, "nomeProduto"));
                                    $ObjProduto->setPreco(filter_input(INPUT_POST,"precoProduto"));
                                    
                                    $ObjProduto->InsereProdutoBD($link);
                                }
                            ?>
                           
                        </div>
                </form>
              
            </div>
        </div></div>             
            
       
          
       
 
      <?php
        // include 'rodape.php';
         ECHO "</body>";
        ?>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"> </script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
</html>

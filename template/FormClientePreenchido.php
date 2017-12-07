<?php

require_once '../Classes/Cliente.php';
    require_once '../Includes/conexao.php';
    
    $objCliente = new Cliente(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
    

        if(!empty($_POST["Atualizar"])){

            $ObjCliente = new Cliente($_GET["id"], $_POST["nomeCliente"], $_POST["dataNascCliente"],
             $_POST["emailCliente"],$_POST["senhaCliente"],$_POST["cpfCliente"], NULL, $_POST["ocupacao"]);

            $ObjCliente->UpdateCliente($link);
        }
        else if(!empty ($_POST["Recarregar"])){
            $CPF=$_POST["cpfCliente"];
            $header = header('Location:recarga.php?CPF=' .$CPF);

        }

?>

<!DOCTYPE html>
 
<html>
    <head>  
    <?php
    require_once 'head.php';
    require_once 'cabecalho.php';
    require_once 'menu.php';
    
                         
    
    
    ///
    
    
?>
      </head>
        <body>
      <div class="page home-page">
      <!-- Main Navbar-->
      <div class="card-header d-flex align-items-center" style="width: 90%; height: auto; margin: auto; margin-top: 3%"> 
     
          <div class="card-body">
                          

                        
                      <!-- INICIO DO FORM -->  
                      <form class="form-horizontal" method="POST">
                          <?php $objCliente->FormPreenchido($link)?>
                        <div class="line"></div>
                        <div class="line"></div>
                   
                        
                        
                        <!-- CANCELAR E SALVAR - BUTTON -->
                        <br><br><div class="form-group row">
                            <input type="submit" name="Voltar" class="btn btn-secondary" value="Voltar"> &nbsp;
                             <input type="submit" name="Recarregar" class="btn btn-secondary" value="Recarregar"> &nbsp;
                             <input type="submit" name="Atualizar" class="btn btn-primary" value="Atualizar"> &nbsp;
                                </div>
                           <?php 
//                            if(!empty($_POST["Atualizar"])){
//                        
//                                $ObjCliente = new Cliente($_GET["id"], $_POST["nomeCliente"], $_POST["dataNascCliente"],
//                                 $_POST["emailCliente"],$_POST["senhaCliente"],$_POST["cpfCliente"], NULL, $_POST["ocupacao"]);
//                                
//                                $ObjCliente->UpdateCliente($link);
//                            }
//                            else if(!empty ($_POST["Recarregar"])){
//                                $CPF=$_POST["cpfCliente"];
//                                $header = header('Location:recarga.php?CPF=' .$CPF);
//                            
//                            }
                           ?>
                      </form>
                          </div>
                            

                      
                      
                      
                                                
                  
                      <!-- FIM DO FORM -->  
                         
                    </div>
                                  </div>

   
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
    
        
        
  </body>

</html>
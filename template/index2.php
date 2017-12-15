<?php
session_start();
require_once '../Includes/conexao.php';

require_once '../Classes/Cardapio.php';
require_once '../Classes/Usuario.php';

$ObjUsuario = new Usuario(NULL, NULL, NULL, NULL, NULL, NULL);

//if(!$ObjUsuario->Verifica()){
//    header('Location:login.php');
//}


$ObjCardapio = new Cardapio(NULL, NULL, NULL);
?>
 
<html>
    
    <head>
    <?php
    require_once 'head.php';
    require_once 'cabecalho.php';
    require_once 'menu.php';
    
 
    ?>
    </head>
  <body>
      <h1> 
          <?php
           
//      date_default_timezone_set('America/Brazil');
//      echo date ('G:i'); 
      ?>
      </h1>
      <div class="page home-page">
      
          <!--<div style="width:90%;"> -->

         <div class="card-header d-flex align-items-center" style="width: 90%;  margin: auto; margin-top: 3%; margin-bottom: 3%;">

              
             <div style="margin-left: 5%; width:90%; " >
                 
                  <!-- TABLE - DIV LANCHES -->
                       <div>
                            <form id="searchForm" action="#" role="search">
                                <input type="search" placeholder="Pesquise" class="form-control" onkeyup="pesquisa(this.value)">
                            </form>
                       </div>
                  <div id="busca">
                         </div>
                 <div class="card-body" style="width:45%; height: 400px; overflow: auto; float: left; background-attachment: fixed;"> 
                 
                   <table class="table table-striped">
                        <thead>
                          <label>Lanches</label>
                          <tr>
                            <th>Produtos</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                           $ObjCardapio->MontaTabelaLanches($link);
                        ?>
                        </tbody>
                    </table> 
                  </div> 
                    
                
                  
                    <div class="card-body" style=" width:45%; height: 400px; overflow: auto; float:right; background-attachment: fixed;">
                      <table class="table table-striped">
                        <thead> 
                          <label> Bebibas</label>
                          <tr>
                            <th>Produtos</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $ObjCardapio->MontaTabelaBebidas($link);?>
                        </tbody>
                      </table>
                    </div>
                  
               
               
                    
                    <!-- FORMULÁRIO - FORMA DE PAGAMENTO  -->
                    <div class="card-body" style="background-color: white; margin-top: 50%;">
                                
                      <!-- INICIO DO FORM -->  
                      <form class="form-horizontal">

                        <!-- VALOR - RADIO -->
                        <br><div class="form-group row">
                          <label class="col-sm-3 form-control-label">Forma de Pagamento <br><small class="text-primary">Selecione</small></label>
                          <div class="col-sm-9">
                          
                              <!-- OPÇÃO 1 - DINHEIRO -->    
                            <div class="i-checks" style="text-align: center">
                                <input id="radioCustom1" type="radio" value="pagamento" name="pagamento" class="radio-template" onclick="sumir(this.value)">
                              <label for="radioCustom1">Dinheiro</label>
                            </div>
                            
                            <!-- OPÇÃO 2 - CARTÃO DE CRÉDITO --> 
                            <div class="i-checks">
                                <input id="radioCustom1" type="radio" value="pagamento" name="pagamento" class="radio-template" onclick="sumir(this.value)">
                                <label for="radioCustom1">Cartão Crédito</label>
                            </div>
                            
                            <!-- OPÇÃO 3 - CARTÃO CANTINA --> 
                            <div class="i-checks" >
                                <input id="radioCustom1" type="radio" value="pagamento" name="pagamento" class="radio-template" onclick="dadosCartao(this.value)">
                                <label for="radioCustom1">Cartão Cantina</label>
                            </div>
                                
                            <!-- AJAX -->
                                <div id="poll">
                                    
                                </div>
                            
                            
                            <!-- CANCELAR E SALVAR - BUTTON -->
                            <br><div class="form-group row">
                                    <button type="submit" class="btn btn-secondary">Cancelar</button> &nbsp;
                                        <button type="submit" class="btn btn-primary">Finalizar</button>
                                </div>
                            <div id="divpreco">
                               
                            </div>
                           
                          </div>
                            

                          </div>
                      
                      
                                                
                      </form>
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

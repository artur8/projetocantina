<!DOCTYPE html>
 
<html>
    
  
    <?php
    require_once '../Includes/conexao.php';
    require_once 'head.php';
    require_once 'cabecalho.php';
    require_once 'menu.php';
    require_once '../Classes/Cardapio.php';
    
    $ObjCardapio = new Cardapio(NULL, NULL, NULL);
    
    ?>

  <body>
      <div class="page home-page">
      
          <!--<div style="width:90%;"> -->
          
         <div class="card-header d-flex align-items-center" style="width: 90%; height:5%;  margin: auto; margin-bottom: 8%; margin-top: 3%">
              
             <div style="margin-left: 5%; width:90%;" >
                 
                  <!-- TABLE - DIV LANCHES -->
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
                    
                
                  <!-- TABLE - BEBIDAS -->
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
                  
         
                 <!-- <div style="background-color: orange;">
                  <div style="background-color: grey;"> -->
                      
                <!--<div style="padding-top:25%; text-align:center; background-color: blue;">-->
                    
                    <!-- FORMULÁRIO - FORMA DE PAGAMENTO  -->
                    <br><br> <form class="form-horizontal" method="GET" action="">
                        <div class="form-group row" style="width: auto; display:block; text-align: center; margin-left: auto; margin-right: auto; margin-top: 52%;"> 
                            <label class="col-sm-3 form-control-label">Finalizar Cardápio <br><small class="text-primary"></small></label>
                           <div class="col-sm-9" style="margin:auto;">
                             
                         
                            
                                
                            <!--</div>
                            <!-- BOTÃO - FINALIZAR -->
                               <div style="margin: auto">
                                   <input type="button" class="btn btn-primary" value="Finalizar" >
                               </div>
                            
             
                    <!--</div>-->
                             
                    
                </div>
                            <!-- FIM DO FORM -->
                              </form>
                </div>
                </div>
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

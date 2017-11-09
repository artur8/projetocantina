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
      <!-- Main Navbar-->
  
          <!-- Dashboard Counts Section-->
          
          <!-- Dashboard Header Section    -->
          
          <!-- Projects Section-->
          
          <!-- Client Section-->
          
          <!-- Page Footer-->
          <div style="width:90%;">
              <div style="margin-left: 10%; width:80%">
          <div class="card-body" style="width:40%; float: left">
                    <table class="table table-striped">
                        <thead>
                          <label>Lanches</label>
                          <tr>
                            <th>Lanches</th>
                            <th>Preço</th>
                            <th>Qnts</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                           $ObjCardapio->MontaTabelaLanches($link);
                        ?>
                        </tbody>
                    </table>
                    
                
              
                    <div class="card-body" style=" width:40%; float:right;">
                      <table class="table table-striped">
                        <thead> 
                          <label> Bebibas</label>
                          <tr>
                            <th>Produto</th>
                            <th>Valor</th>
                            <th>Preço</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php $ObjCardapio->MontaTabelaBebidas($link);?>
                        </tbody>
                      </table>
                    </div>
          </div>
              <div>
                  <div>
                <div style="padding-top:25%; text-align:center">
                    <form method="GET" action="">
                    <div class="form-group row">
                        <div class="card-header d-flex align-items-center" style="margin:auto; width: 40%">
                            <div class="col-sm-9" style="margin:auto">
                            <div class="i-checks">
                                <input id="radioCustom1" type="radio" value="pagamento" name="pagamento" class="radio-template" onclick="sumir(this.value)">
                              <label for="radioCustom1">Dinheiro</label>
                            </div>
                            <div class="i-checks">
                                <input id="radioCustom1" type="radio" value="pagamento" name="pagamento" class="radio-template" onclick="sumir(this.value)">
                                <label for="radioCustom1">Cartão Crédito</label>
                            </div>
                            <div class="i-checks" >
                                <input id="radioCustom1" type="radio" value="pagamento" name="pagamento" class="radio-template" onclick="dadosCartao(this.value)">
                                <label for="radioCustom1">Cartão Cantina</label>
                          </div>
                                <div id="poll">
                                    
                                </div> 
                                <div style="margin: auto">
                                    <input type="button" class="btn btn-primary" value="Finalizar" >
                                </div>
                                
                            </div>
                            </div>
             
                    </div>
                               </form>
                </div>
                </div>
              </div></div>
             
            
       
          
       
 
     
      <?php
         // include 'rodape.php';
          ECHO "</div>";
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
  </body>
</html>
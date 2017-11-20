<!DOCTYPE html>
 
<html>
     
    <?php
    require_once 'head.php';
    ?>

  <body>
      <div class="page home-page">
      <!-- Main Navbar-->
<?php 
require_once 'cabecalho.php';
require_once 'menu.php';

//require_once '../Includes/botao.js';
//require_once '../Includes/botao.css';
?>
     <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                    <div class="card" style="width: 50%">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Fechar</a></div>
                      </div>
                    </div>
     
                      <div class="card-body" style="width: 100%;">
                          Pedido: 12<br>
                          Ítens: Pastel<br>
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
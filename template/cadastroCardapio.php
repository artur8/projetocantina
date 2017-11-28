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
                 <table class='table table-striped'>
                          <tr>
                            <th>Produtos</th>
                            <th>Valor</th>
                            <th>Quantidade</th>
                            
                          </tr>
                        <tbody>
                      
                            <?php $ObjCardapio->MontarCardapios($link);?>
                           
             


            <div style="margin: auto">
                <input type="button" class="btn btn-primary" value="Finalizar" >
            </div>

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

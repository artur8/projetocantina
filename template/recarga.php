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
?>
      <!--<br><br><form name = "recarga" action= " " method = "POST">
      <label class="col-sm-3 form-control-label">CPF:</label>
       <input type="text" class="form-control" style = "width:300px">
      </form> -->
      
            
      
      <div class="card-header d-flex align-items-center" style="width: 90%; height:70%; margin: auto; margin-top: 3%"> 
     
          <div class="card-body">
                          

                        
                      <!-- INICIO DO FORM -->  
                      <form class="form-horizontal">
                        
                           <!-- CPF - ENABLED -->
                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">CPF</label>
                          <div class="col-sm-9">
                              <input type="text" name="cpf" placeholder="Digite aqui..." class="form-control">
                          </div>
                          </div>
                          
                        <div class="line"></div>
                        <div class="line"></div>
                       
                        
                        <!-- NOME - DISABLED -->
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nome</label>
                          <div class="col-sm-9">
                            <input type="text" name="nome" disabled="" placeholder="Entrada desabilitada..." class="form-control">
                          </div>
                        </div>
                        
                        <!-- SALDO  - DISABLED -->
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Saldo atual</label>
                          <div class="col-sm-9">
                            <input type="text" name="saldo" disabled="" placeholder="Entrada desabilitada..." class="form-control">
                          </div>
                        </div>
                        
                        
                        
                        <div class="line"></div>
                        <div class="line"></div>
                        
                        
                        <!-- VALOR - RADIO -->
                        <br><div class="form-group row">
                          <label class="col-sm-3 form-control-label">Valor <br><small class="text-primary">Selecione</small></label>
                          <div class="col-sm-9">
                          
                            <!-- OPÇÃO 1 -->
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">Opção 1</label>
                            </div>
                              
                            <!-- OPÇÃO 2 -->
                            <div class="i-checks">
                              <input id="radioCustom2" type="radio" value="option2" name="a" class="radio-template">
                              <label for="radioCustom2">Opção 2</label>
                            </div>
                            
                            <!-- OPÇÃO 3 -->
                            <div class="i-checks">
                              <input id="radioCustom3" type="radio" value="option3" name="a" class="radio-template">
                              <label for="radioCustom3">Opção 3</label>
                            </div>
                          
                            <!-- OPÇÃO 4 -->
                            <div class="i-checks">
                              <input id="radioCustom4" type="radio" value="option4" name="a" class="radio-template">
                              <label for="radioCustom3">Opção 4</label>
                            </div>
                            
                            <!-- OPÇÃO 5 -->
                            <div class="i-checks">
                                <input id="radioCustom5" type="radio" value="option5" name="a" class="radio-template" onclick="recarga(this.value)">
                              <label for="radioCustom3">Opção 5</label>
                            </div>
                            <br>
                            <div id="poll">
                                
                            </div>
                            
                            <!-- CANCELAR E SALVAR - BUTTON -->
                            <br><br><div class="form-group row">
                                    <!-- <div class="col-sm-4 offset-sm-3"> -->
                                    <button type="submit" class="btn btn-secondary">Cancel</button> &nbsp;
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                           
                          </div>
                            

                          </div>
                      
                      
                                                
                      </form>
                      <!-- FIM DO FORM -->  
                         
                    </div>
                                  </div>



                     
        
      <div style="margin-top: 8%">
      <?php
          include 'rodape.php';
        ?>
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



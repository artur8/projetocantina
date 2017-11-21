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
 
            
        <div class="card-header d-flex align-items-center" style="width: 90%; height:70%; margin: auto; margin-top: 3%;"> 
              
            <div class="card-body style">
                  
                <!-- INICIO DO FORM -->  
                <form class="form-horizontal">
                       
                    <!-- NOME DO PRODUTO - ENABLED -->
                    <div class="form-group row" style="padding-top: 5%;  height: 120%">
                              
                        <div style=" width:10%; height: 100% "><label class="col-sm-3 form-control-label">Nome</label></div>
                        <div class="col-sm-9" style="width:100%">
                            <input type="text" name="nomeFuncionario" placeholder="Digite aqui..." class="form-control">
                        </div>
                        <br><br>
                        <div style=" margin-top:2%; margin-right:80%; width:10%; height: 100%; background-color: greenyellow"><label class="col-sm-3 form-control-label">Email</label></div>
                        <div class="col-sm-9" style="margin-right:10%">
                            <input type="text" name="email" placeholder="Digite aqui..." class="form-control">
                        </div>
                        <br><br>
                        <div style=" width:50%; height: 100% "><label class="col-sm-3 form-control-label">Senha</label></div>
                        <div class="col-sm-9">
                            <input type="password" name="senha" placeholder="Digite aqui..." class="form-control">
                        </div>
                        <br><br>
                        <div style=" width:50%; height: 100% "><label class="col-sm-3 form-control-label">CPF</label></div>
                        <div class="col-sm-9">
                            <input type="text" name="cpf" placeholder="Digite aqui..." class="form-control">
                        </div>
                        <br><br>
                        <div style=" width:50%; height: 100% "><label class="col-sm-3 form-control-label">Data <br> Nascimento</label></div>
                        <div class="col-sm-9">
                            <input type="date" name="data" placeholder="Digite aqui..." class="form-control">
                        </div>
                              <br><br>
                              <div class="form-group row" style="margin-bottom:0%">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="submit" class="btn btn-secondary">Cancelar</button> &nbsp;
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                           
                        </div>
                    </div>
                       
                    <div class="line"></div>
                    <div class="line"></div>
                        
                        
               
                
                <!-- CANCELAR E SALVAR - BUTTON -->
              
                </form>
              
            </div>
             
            
       
          
       
 
     
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
=======

      <div class="card-header d-flex align-items-center" style="width: 90%; height: auto; margin: auto; margin-top: 3%"> 
     
          <div class="card-body">
                          

                        
                      <!-- INICIO DO FORM -->  
                      <form class="form-horizontal">
                        
                           <!-- NOME - ENABLED -->
                          <div class="form-group row" style="padding-top: 10%">
                          <label class="col-sm-3 form-control-label">Nome</label>
                          <div class="col-sm-9">
                              <input type="text" name="nomeFuncionario" placeholder="Digite aqui..." class="form-control">
                          </div>
                          </div>
                           
                           <!-- EMAIL - ENABLED -->
                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">E-mail</label>
                          <div class="col-sm-9">
                              <input type="text" name="emailFuncionario" placeholder="Digite aqui..." class="form-control">
                          </div>
                          </div>
                           
                            <!-- SENHA - ENABLED -->
                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Senha</label>
                          <div class="col-sm-9">
                              <input type="password" name="senhaFuncionario" placeholder="Digite aqui..." class="form-control">
                          </div>
                          </div>
                            
                          <!-- DATA DE NASCIMENTO - ENABLED -->
                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Data de nascimento</label>
                          <div class="col-sm-9">
                              <input type="date" name="dataNascFuncionario" class="form-control">
                          </div>
                          </div>
                          
                          <!-- CPF - ENABLED -->
                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">CPF</label>
                          <div class="col-sm-9">
                              <input type="text" name="cpfFuncionario" placeholder="Digite aqui..." class="form-control">
                          </div>
                          </div>
                          
                           <!-- SALÁRIO - ENABLED -->
                          <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Salário</label>
                          <div class="col-sm-9">
                              <input type="text" name="salarioFuncionario" placeholder="Digite aqui..." class="form-control">
                          </div>
                          </div>
                           
    
                        <div class="line"></div>
                        <div class="line"></div>
                   
                        
                        
                        <!-- CANCELAR E SALVAR - BUTTON -->
                        <br><br><div class="form-group row">
                                    <button type="submit" class="btn btn-secondary">Cancelar</button> &nbsp;
                                    <button type="submit" class="btn btn-primary">Recarregar</button>
                                </div>
                           
                          </div>
                            

                      
                      
                      
                                                
                      </form>
                      <!-- FIM DO FORM -->  
                         
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
>>>>>>> origin/master (8dd9939) - Merge origin/m

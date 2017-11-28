<?php
require_once '../Classes/Cartao.php';

$ObjCartao = new Cartao(NULL, NULL, NULL, NULL, NULL, NULL, NULL);
$return = $ObjCartao->gethuhu($link);

$ObjCartao->SetCPF($return["CPF"]);
$ObjCartao->SetNome($return["Nome"]);
$ObjCartao->setCreditos($return["Creditos"]);
?>
                   
                        <!-- NOME - DISABLED -->
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nome</label>
                          <div class="col-sm-9">
                              <input type="text" name="nome" disabled="" placeholder="<?php $ObjCartao->GetNome(); ?>" class="form-control">
                          </div>
                        </div>
                        
                        <!-- SALDO  - DISABLED -->
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Saldo atual</label>
                          <div class="col-sm-9">
                              <input type="text" name="saldo" disabled="" placeholder="<?php $ObjCartao->getCreditos(); ?>" class="form-control">
                          </div>
                        </div>
                        
                       
        
        


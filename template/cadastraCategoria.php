<?php
$valor = $_GET["Valor"];
if ($valor == "cadastrar"){
echo '<label class="col-sm-3 form-control-label">Nome</label>
                        <div class="col-sm-9">
                            <input type="integer" name="nomeCategoria" placeholder="Digite aqui..." class="form-control">
                        </div>';
}else{
    echo '';
}
?>
 <?php
 
 Class Pedido{
    protected $id;
    protected $idCliente;
    protected $Forma_pagamento;
    protected $valor_total;
    protected $hora;
    protected $Quantidade;
    protected $IdProduto;
    protected $String;


    public function __construct($_idPedido, $_idCliente, $_Forma_pagamento,$_valortotal, $_hora, $_quantidade) {
        $this->id = $_idPedido;
        $this->idCliente = $_idCliente;
        $this->Forma_pagamento = $_Forma_pagamento;
        $this->valor_total = $_valortotal;
        $this->hora = $_hora;    
        $this->quantidade = $_quantidade;
        
    }
    function getId() {
        return $this->id;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getForma_pagamento() {
        return $this->Forma_pagamento;
    }

    function getValor_total() {
        return $this->valor_total;
    }

    function getHora() {
        return $this->hora;
    }

    function setId($id) {
        $this->id = $id;
    }
    
    function getIdProduto(){
        return $this->IdProduto;
    }
    
    function getQuantidade(){
        return $this->Quantidade;
    }
    
    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setForma_pagamento($Forma_pagamento) {
        $this->Forma_pagamento = $Forma_pagamento;
    }

    function setValor_total($valor_total) {
        $this->valor_total = $valor_total;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }
    
    function setIdProduto($_idProduto){
        $this->IdProduto = $_idProduto;
    }
    
    function setQuantidade($_quantidade){
        $this->Quantidade = $_quantidade;
    }
    public function MontaPedidos($link){
        
    }
    public function gerenciarCompra($link){
        $query = "SELECT * FROM Produto Where idProduto = $this->IdProduto;";
        $resultado= $link->query($query);
        $linha = $resultado->fetch_array();
        $valor = $linha["Valor"];
        
        $this->valor_total = $this->Quantidade * $valor;
        
        
        $_SESSION["String"] = $_SESSION["String"] . "*$this->IdProduto-$this->Quantidade";
        
        $String = $_SESSION["String"];
        
        $aux = explode("*", $String);
        
        foreach($aux as $value){
            $item = explode('-', $value);
            $id = $item[0];
            
        }
        
    }

    /* public function gerenciarCompra($link){
        $id = $_GET["id"];
        $qnts = $_GET["qnts"];
        
        echo "<h1>oçiugjv</h1>"; 
        $_SESSION["Compra"] = 0;
        $_SESSION["Compra"] = $_SESSION["Compra"] . "$id-$qnts*";
        
        $String = $_SESSION["Compra"];
        $produtos = explode('*', $String);
        if(!empty($_SESSION["Total"])) {
            $_SESSION["Total"] = 0;
        }
        
        //echo $_SESSION["Total"];
        
        foreach ($produtos as $value){
            $cada = explode('-',$value);
            echo "<pre>";
            print_r($cada) . "<br>";
            echo"</pre>";
            //$id = $cada[0];
             //$quantidade = $cada[1];
             
            
            $query = "select * from produto where idProduto=$cada[0]";
            $resultado = $link->query($query);
            
            while($linha=$resultado->fetch_array()){
                $valor = $linha["Valor"];
                $preco = $cada[1] * $valor;
                $_SESSION["Total"] = $_SESSION["Total"] + $preco;
 
        }
        
        echo $query . "<br>";
    }
    

    */
 }
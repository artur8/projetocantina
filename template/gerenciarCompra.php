<?php
session_start();
require_once '../Classes/Pedido.php';
require_once '../Includes/conexao.php';

$ObjPedido = new Pedido(NULL, NULL, NULL, NULL, NULL, NULL);

$id = $_GET["id"];
$quantidade = $_GET["qnts"];

$ObjPedido->setIdProduto($id);
$ObjPedido->setQuantidade($quantidade);

$ObjPedido->gerenciarCompra($link);



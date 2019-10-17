<?php
	include("classeCabecalhoHTML.php");
	include("cabecalho.php");
	
	
include("conexao.php");

if(!empty($_POST)){

	include("classeControllerBD.php");
	
	$c = new ControllerBD($conexao);
	$c->inserir($_POST,$_GET["tabela"]);

	$str = strtolower($_POST["tabela"]);
	
}
else{
	header("location: form_fornecedor.php");
}
?>
<?php
	include("classeCabecalhoHTML.php");
	include("cabecalho.php");
	
	require_once("InterfaceExibicao.php");
	require_once("classeInput.php");
	require_once("classeForm.php");

	$v = array("action"=>"insere.php?tabela=produto","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"number","name"=>"ID_PRODUTO","placeholder"=>"ID DO PRODUTO...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"NOME","placeholder"=>"NOME DO PRODUTO...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"DESCRICAO","placeholder"=>"DESCRIÇÃO DO PRODUTO...");
	$f->add_input($v);
	$v = array("type"=>"number","name"=>"PRECO_UNITARIO","placeholder"=>"PREÇO UNITÁRIO DO PRODUTO...");
	$f->add_input($v);
	$v = array("type"=>"SUBMIT","name"=>"ENVIAR");
	$f->add_input($v);	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style> input{margin:4px;}</style>
	</head>
<body>
<h3>Formulário - Inserir Produto</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>
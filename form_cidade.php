<?php

	include("classeCabecalhoHTML.php");
	include("cabecalho.php");
	
	require_once("InterfaceExibicao.php");
	require_once("classeInput.php");
	require_once("classeOption.php");
	require_once("classeSelect.php");
	require_once("classeForm.php");
	

	include("conexao.php");
	
	
    $select = "SELECT ID_CIDADE AS value, NOME_CIDADE AS texto FROM cidade ORDER BY NOME_CIDADE";

	$stmt = $conexao->prepare($select);
    $stmt->execute();
    
	$v = array("action"=>"insere.php?tabela=cidade","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"ID_CIDADE","placeholder"=>"ID DA CIDADE...");
	$f->add_input($v);

	$v = array("type"=>"number","name"=>"NOME_CIDADE","placeholder"=>"NOME DA CIDADE...");
	$f->add_input($v);
	

    $v = array("name"=>"ID_ESTADO");
	$f->add_select($v,$matriz);
	
	
	$v = array("type"=>"submit","name"=>"ENVIAR");
	$f->add_input($v);	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<style> input{margin:4px;}</style>
	</head>
<body>
<h3>Formulário - Inserir Cidade</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>
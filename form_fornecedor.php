<?php

	include("classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("conexao.php");
	require_once("InterfaceExibicao.php");
	require_once("classeInput.php");
	require_once("classeOption.php");
	require_once("classeSelect.php");
	require_once("classeForm.php");

	include("conexao.php");
	

	$select = "SELECT FORNECEDOR.ID_CIDADE AS value, NOME_CIDADE AS texto FROM cidade, fornecedor WHERE FORNECEDOR.ID_CIDADE = CIDADE.ID_CIDADE";

	$stmt = $conexao->prepare($select);
	$stmt->execute();

	while($linha=$stmt->fetch()){
		$matriz[] = $linha;
	}	

	$v = array("action"=>"insere.php?tabela=fornecedor","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"number","name"=>"ID_FORNECEDOR","placeholder"=>"ID DO FORNECEDOR...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"RAZAO_SOCIAL","placeholder"=>"RAZÃO SOCIAL...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"NOME_FANTASIA","placeholder"=>"NOME FANTASIA...");
	$f->add_input($v);

	$v = array("name"=>"ID_CIDADE");
	$f->add_select($v,$matriz);

    $v = array("type"=>"submit","name"=>"ENVIAR");
	$f->add_input($v);	
?>

<h3>Formulário - Inserir Fornecedor</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>
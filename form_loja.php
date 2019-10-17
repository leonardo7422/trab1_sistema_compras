<?php
	include("classeCabecalhoHTML.php");
	include("cabecalho.php");
	
	
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
    
	$v = array("action"=>"insere.php?tabela=loja","method"=>"post");
    $f = new Form($v);
    
	$v = array("type"=>"number","name"=>"ID_LOJA","placeholder"=>"ID DA LOJA...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"CNPJ","placeholder"=>"CNPJ DA LOJA...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"RAZÃO_SOCIAL","placeholder"=>"RAZÃO SOCIAL...");
	$f->add_input($v);
	$v = array("type"=>"text","name"=>"NOME_FANTASIA","placeholder"=>"NOME FANTASIA...");
    $f->add_input($v);
    
    $v = array("name"=>"ID_CIDADE");
    $f->add_select($v,$matriz);
    
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
<h3>Formulário - Inserir Loja</h3>

<hr />
<?php
	$f->exibe();

?>
</body>
</html>
</html>
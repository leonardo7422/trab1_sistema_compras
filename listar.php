<?php
	include("classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("classeTabela.php");
	
	include("conexao.php");
	include("classeControllerBD.php");
	
	
	$colunas = array();
	
	$t[0][0] = "fornecedor";
	$t[0][1] = "compra";
	$t[1][0] = "loja";
	$t[1][1] = "estado";
	$t[2][0] = "produto";
	$t[2][1] = "cidade";
	
	$c = new ControllerBD($conexao);
	
	$r = $c->selecionar($colunas,$t,null);
	
	while($linha = $r->fetch(PDO::FETCH_ASSOC)){
		$matriz[] = $linha;
	}
	
	$t = new Tabela($matriz,"fornecedor");
	$t->exibe();
?>
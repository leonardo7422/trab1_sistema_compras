<?php
	include("classeCabecalhoHTML.php");
	include("cabecalho.php");
	include("classeTabela.php");
	
	include("conexao.php");
	include("classeControllerBD.php");
	
	
	$colunas = array(   "id_fornecedor as ID",
						"Nome_Departamento AS 'Nome do Departamento'",
						"Endereco as 'Endereço'",
						"CEP",
						"Cidade",
						"Estado",
						"Nome_pais as 'País'",
						"Nome_regiao as 'Região'");
	
	$t[0][0] = "fornecedor";
	$t[0][1] = "localizacao";
	$t[1][0] = "localizacao";
	$t[1][1] = "pais";
	$t[2][0] = "pais";
	$t[2][1] = "regiao";
	
	$c = new ControllerBD($conexao);
	
	$r = $c->selecionar($colunas,$t,null);
	
	while($linha = $r->fetch(PDO::FETCH_ASSOC)){
		$matriz[] = $linha;
	}
	
	$t = new Tabela($matriz,"fornecedor");
	$t->exibe();
?>
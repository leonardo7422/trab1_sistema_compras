<?php

	$c = new CabecalhoHTML();
	$v = array("fornecedor"=>"Fornecedor","compra"=>"Compra","produto"=>"Produto","loja"=>"Loja","cidade"=>"Cidade","estado"=>"Estado");
	$c->add_menu($v);
	$c->exibe();

//Feito

?>
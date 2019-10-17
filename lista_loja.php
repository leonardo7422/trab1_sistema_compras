<?php
	include("classeCabecalhoHTML.php");
	include("cabecalho.php");
	
	include("conexao.php");
	
	$sql = "SELECT * FROM loja ORDER BY ID_LOJA";
	
	$stmt = $conexao->prepare($sql);
	
	$stmt->execute();
	
	echo "<table border='1'>";
	echo "<thead>
			<tr>
				<th>ID DA LOJA</th>
				<th>CNPJ</th>
				<th>RAZÃO SOCIAL</th>
                <th>NOME FANTASIA</th>
				<th>ID DA CIDADE</th>                
				<th>AÇÃO</th>
			</tr>
		  </thead>
		  <tbody>
		  ";
	while($linha=$stmt->fetch()){
		echo "<tr>
				<td>".$linha["ID_LOJA"]."</td>
				<td>".$linha["CNPJ"]."</td>
				<td>".$linha["RAZAO_SOCIAL"]."</td>
                <td>".$linha["NOME_FANTASIA"]."</td>
                <td>".$linha["ID_CIDADE"]."</td>
				<td>
					<form method='post' action='remover.php'>
						<input type='hidden' name='tabela' value='loja' />
						<input type='hidden' name='id' 
							value='".$linha["ID_LOJA"]."' />
						<button>Remover</button>
					</form>
					
				</td>
		      </tr>";
	}
	echo "</tbody>
		</table>";
?>
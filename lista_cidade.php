<?php
	include("classeCabecalhoHTML.php");
	include("cabecalho.php");
	
	include("conexao.php");
	
	$sql = "SELECT * FROM cidade ORDER BY ID_CIDADE";
	
	$stmt = $conexao->prepare($sql);
	
	$stmt->execute();
	
	echo "<table border='1'>";
	echo "<thead>
			<tr>
				<th>ID DA CIDADE</th>
				<th>NOME DA CIDADE</th>
				<th>CODIGO ESTADO</th>
				<th>AÇÃO</th>
			</tr>
		  </thead>
		  <tbody>
		  ";
	while($linha=$stmt->fetch()){
		echo "<tr>
				<td>".$linha["ID_CIDADE"]."</td>
				<td>".$linha["NOME_CIDADE"]."</td>
				<td>".$linha["ID_ESTADO"]."</td>
				<td>
					<form method='post' action='remover.php'>
						<input type='hidden' name='tabela' value='cidade' />
						<input type='hidden' name='id' 
							value='".$linha["ID_CIDADE"]."' />
						<button>Remover</button>
					</form>
					
				</td>
		      </tr>";
	}
	echo "</tbody>
		</table>";
?>
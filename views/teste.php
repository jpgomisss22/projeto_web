<div>
	
<form method="post" action="processa_aluno.php">
	<label>Nome Aluno:</label><br>
	<input type="text" name="nome" placeholder="Digite o nome do aluno">
	<br><br>
	<label>OBS:</label><br>
	<input type="text" name="obs" placeholder="Digite a data de nascimento">
	<br><br>
	<input type="submit" value="Inserir aluno">
</form>
</div>






<a href="?pagina=teste2">CU teste2</a>



<a href="?pagina=inserir_aluno">TESTE</a>

<table style="border: 1px solid #000; width:100% " >
	<thead>
		<tr>
			<th>Nome </th>
			<th>OBS</th>
			<th>Excluir</th>
			
		</tr>
	</thead>

	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_alunos)){
				echo'<tr><td>'.$linha['nome'].'</td>';
				echo'<td>'.$linha['obs'].'</td>	';
				echo '<td>
					<a href="processa_deleta_aluno.php?cu='.$linha['id'].'">Deletar</a></td>
				</tr>'	;
			?>
		<?php
			}
		
		?>
	</tbody>
</table>
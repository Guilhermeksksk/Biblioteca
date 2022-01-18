<h1>Listar Usuário</h1>
<?php
	$sql = "SELECT * FROM aluno";

	$res = $conn->query($sql) or die($conn->error);

	$qtd = $res->num_rows;

	print "<p>Encontrou<b> $qtd</b> resultado(s)</p>";

	if ($qtd > 0) {
		print "<table class='table table-dark   table-bordered'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Nome</th>";
		print "<th>Email</th>";
		print "<th>Telefone</th>";
		print "<th>RGM</th>";
		print "<th>Endereço</th>";
		print "<th>Data de nascimento</th>";
		print "<th>Genero</th>";
		print "<th>Ações</th>";
		print "</tr>";

		while ($row = $res->fetch_object()) {
			print "<tr>";
			print "<td>".$row->id_aluno."</td>";
			print "<td>".$row->nome_aluno."</td>";
			print "<td>".$row->email_aluno."</td>";
			print "<td>".$row->fone_aluno."</td>";
			print "<td>".$row->rgm_aluno."</td>";
			print "<td>".$row->end_aluno."</td>";
			print "<td>".$row->data_nasc_aluno."</td>";
			print "<td>".$row->genero_aluno."</td>";
			print "<td>
			 		<button class='btn btn-primary' onclick=\"location.href='?page=usuario-editar&id_aluno=".$row->id_aluno."';\">
			 			Editar</button>
			 		<button class='btn btn-danger' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=usuario-salvar&acao=excluir&id_aluno=".$row->id_aluno."';}else{false;}\">
			 			Excluir</button>
			 </td>";

			print "</tr>";
		}
		print "</table>";
	}
?>
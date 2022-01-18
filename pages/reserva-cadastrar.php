<h1>Cadastrar Reserva</h1>

<form action="?page=reserva-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">

	<label>Aluno</label>
	<select name="aluno_id_aluno" class="form-control">
	<option>Escolha o Aluno</option>
	<?php

	$sql = "SELECT * FROM aluno";

	$resu = $conn->query($sql) or die($conn->error); 

	if ($resu->num_rows > 0) {
		while ($row = $resu->fetch_object()) {
			print "<option value='".$row->id_aluno."'>";
			print $row->nome_aluno."</option>";
		}
	}else{
		print "Não há Alunos(as) cadastrados(as)";
	}

     ?>
     </select>

     <label>Livro</label>
     <select name="livro_id_livro" class="form-control">
     	<option>Escolha o Livro</option>
     	<?php
     	$sql = "SELECT * FROM  livro";

     	$resu = $conn->query($sql) or die($conn->error);

     	if ($resu->num_rows > 0) {
     		while ($row = $resu->fetch_object()) {
     			print "<option value='".$row->id_livro."'>";
     			print $row->titulo_livro."</option>";
     		}
     	}else{
     		print "Não há Livros cadastradas";
     		}
     	?>
     </select>

     <label>Atendente</label>
     <select name="atendente_id_atendente" class="form-control">
     	<option>Escolha a Atendente</option>

     	<?php
     	 	$sql = "SELECT * FROM atendente";

     	 	$resu = $conn->query($sql) or die($conn->error);

     	 	if ($resu->num_rows > 0) {
     	 		while ($row = $resu->fetch_object()) {
     	 			print "<option value='".$row->id_atendente."'>";
     	 			print $row->nome_atendente."</option>";
     	 		}
     	 	}else{
     	 		print "Não há Atendentes cadastrados";
     	 		}
     	?>
     </select>
     <label>Data de Reserva</label>
     <input type="date" name="data_emprestimo" class="form-control">
     <label>Data devolução</label>
     <input type="date" name="data_devolucao" class="form-control">
     <button type="submit" class="btn btn-success">Enviar</button>

</form>
<?php
	switch ($_REQUEST['acao']){
		case 'cadastrar':

			$aluno = $_POST['aluno_id_aluno'];
			$livro = $_POST['livro_id_livro'];
			$aten = $_POST['atendente_id_atendente'];
			$emp = $_POST['data_emprestimo'];
			$devo = $_POST['data_devolucao'];


			$sql = "INSERT INTO reservas(aluno_id_aluno, livro_id_livro, atendente_id_atendente, data_emprestimo, data_devolucao) 
					VALUES ('{$aluno}','{$livro}','{$aten}','{$emp}','{$devo}')";

					$res = $conn->query($sql) or die($conn->error);

					if($res==true){
				print "<script>alert('Cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}else{
				print "<script>alert('Não foi possível Cadastrar!');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}
					
			break;
		
		case 'editar':

			$aluno = $_POST['aluno_id_aluno'];
			$livro = $_POST['livro_id_livro'];
			$aten = $_POST['atendente_id_atendente'];
			$emp = $_POST['data_emprestimo'];
			$devo = $_POST['data_devolucao'];

			$sql = "UPDATE reservas SET
			aluno_id_aluno='{$aluno}',
			livro_id_livro='{$livro}',
			atendente_id_atendente='{$aten}',
			data_emprestimo='{$emp}',
			data_devolucao='{$devo}'
			WHERE
			id_reserva=".$_REQUEST['id_reserva'];

			$resu = $conn->query($sql) or die($conn->error);

			if ($resu==true) {
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar!');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}



			break;

		case 'excluir':
			$sql = "DELETE FROM reservas
			WHERE id_reserva =".$_REQUEST["id_reserva"];
			 
			 $resu = $conn->query($sql) or die($conn->error);

			if($resu==true){
				print "<script>alert('Excluído com sucesso!');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}else{
				print "<script>alert('Não foi possível excluir!');</script>";
				print "<script>location.href='?page=reserva-listar';</script>";
			}
			break;

	}


?>
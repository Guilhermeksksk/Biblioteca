<?php 
	switch ($_REQUEST['acao']){
		case 'cadastrar':

			$titulo = $_POST['titulo_livro'];
			$autor = $_POST['autor_livro'];
			$editora = $_POST['editora_livro'];
			$edição = $_POST['edicao_livro'];
			$localidade = $_POST['localidade_livro'];
			$ano = $_POST['ano_livro'];
			$categoria = $_POST['categoria_id_categoria'];

			$sql = "INSERT INTO livro(titulo_livro, autor_livro, editora_livro, edicao_livro, localidade_livro, ano_livro, categoria_id_categoria) VALUES 
			('{$titulo}', '{$autor}', '{$editora}', '{$edição}', '{$localidade}', '{$ano}',{$categoria})";

			$resu = $conn->query($sql) or die($conn->error);

		if ($resu==true) {
				print "<script>alert('Cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
		}else{
				print "<script>alert('Não foi possível cadastrar!');</script>";
				print "<script>location.href='?page=livro-listar';</script>";
			}
		break;

		case 'editar':

			$titulo = $_POST['titulo_livro'];
			$autor = $_POST['autor_livro'];
			$editora = $_POST['editora_livro'];
			$edição = $_POST['edicao_livro'];
			$localidade = $_POST['localidade_livro'];
			$ano = $_POST['ano_livro'];
			$categoria = $_POST['categoria_id_categoria'];


			$sql="UPDATE livro SET 
				titulo_livro='{$titulo}',
				autor_livro='{$autor}',
				editora_livro='{$editora}',
				edicao_livro='{$edição}',
				localidade_livro='{$localidade}',
				ano_livro='{$ano}',
				categoria_id_categoria='{$categoria}'
				WHERE 
				id_livro=".$_REQUEST['id_livro'];

				$resu = $conn->query($sql) or die($conn->error);

				if ($resu==true) {
					print "<script>alert('Editado com sucesso!');</script>";
					print "<script>location.href='?page=livro-listar';</script>";
				}else{
					print "<script>alert('Não foi possível Editar!');</script>";
					print "<script>location.href='?page=livro-listar';</script>";
				}



		break;

		case 'excluir':
			$sql = "DELETE FROM livro 
					WHERE id_livro=".$_REQUEST["id_livro"];

			$res = $conn->query($sql) or die($conn->error);

		

		if ($res==true) {
			print "<script>alert('Excluido com sucesso!');</script>";
			print "<script>location.href='?page=livro-listar';</script>";
		}else{
			print "<script>alert('Não foi possível excluir!');</script>";
			print "<script>location.href='?page=livro-listar';</script>";
				}
			break;
		}
		

?>
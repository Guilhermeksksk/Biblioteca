<h1>Editar Categoria</h1>
<?php
	$sql = "SELECT * FROM categoria WHERE id_categoria=".$_REQUEST["id_categoria"];

	$res = $conn->query($sql) or die($conn->error);

	$rows = $res->fetch_object();
?>

<form action="?page=categoria-salvar" method="POST">
	<input type="hidden" value="editar" name="acao">
	<input type="hidden" name="id_categoria" value="<?php print $rows->id_categoria; ?> ">
	<div class="mb-3">
	<label>Nome:</label>
	<input type="text" name="nome_categoria" class="form-control" placeholder="Nome categoria" required value="<?php print $rows->nome_categoria; ?> ">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>
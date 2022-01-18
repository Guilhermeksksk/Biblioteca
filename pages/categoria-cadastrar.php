<h1>Cadastrar Categoria</h1>

<form action="?page=categoria-salvar" method="POST">
	<input type="hidden" value="cadastrar" name="acao">
	<div class="mb-3">
	<label>Nome:</label>
	<input type="text" name="nome_categoria" class="form-control" placeholder="Nome categoria" required>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>
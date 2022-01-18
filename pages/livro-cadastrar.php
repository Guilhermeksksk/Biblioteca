<h1>Cadastrar Livro</h1>

<form class="row g-3" action="?page=livro-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
  <div class="col-md-6">
    <label>Titulo:</label>
    <input type="text" class="form-control" name="titulo_livro">
  </div>
  <div class="col-md-6">
    <label>Autor:</label>
    <input type="text" class="form-control" name="autor_livro">
  </div>
  <div class="col-12">
    <label >Editora</label>
    <input type="text" class="form-control" name="editora_livro">
  </div>
  <div class="col-12">
    <label>Edição</label>
    <input type="text" class="form-control" name="edicao_livro">
  </div>
  <div class="col-md">
    <label >Localidade</label>
    <input type="text" class="form-control" name="localidade_livro">
  </div>
  <div>
  	<label class="col-6">Ano livro</label>
  	<input type="number" name="ano_livro" class="form-control">
  </div>
  <div class="col-md-4">
    <label>Categoria: </label>
    <select name="categoria_id_categoria" class="form-control">
      <option selected>Escolha uma Categoria</option>
      <?php  
      $sql = "SELECT * FROM categoria";

      $resu = $conn->query($sql) or die($conn->error);

      if ($resu->num_rows > 0) {
      	while ($row = $resu->fetch_object()) {
      		print "<option value='".$row->id_categoria."'>";
      		print $row->nome_categoria."</option>";
      	}
      }else{
      	print "Não há categorias cadastrados";
      }

      ?>
    </select>
  	</div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-success">Enviar</button>
  </div>
</form>
<h1>Editar Usuário</h1>
<?php 

$sql = 	"SELECT * FROM aluno WHERE id_aluno=".$_REQUEST['id_aluno'];

$resu = $conn->query($sql) or die($conn->error);

$row= $resu->fetch_object();


?>

<form class="row g-3" action="?page=usuario-salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id_aluno" value="<?php print $row->id_aluno ?>">

  <div class="col-md-12">
    <label >Nome:</label>
    <input type="text" class="form-control" name="nome_aluno" value="<?php print $row->nome_aluno ?>">
  </div>
  <div class="col-md-12">
    <label>Email:</label>
    <input type="email" class="form-control" name="email_aluno" value="<?php print $row->email_aluno ?>">
  </div>
  <div class="col-12">
    <label>Telefone:</label>
    <input type="number" class="form-control" name="fone_aluno" value="<?php print $row->fone_aluno ?>">
  </div>
  <div class="col-12">
    <label>RGM:</label>
    <input type="number" class="form-control" name="rgm_aluno" value="<?php  print $row->rgm_aluno ?>" >
  </div>
  <div class="col">
    <label class="form-label">Endereço:</label>
    <input type="text" class="form-control" name="end_aluno" value="<?php print $row->end_aluno ?>">
  </div>
  <div class="col">
  	<label class="form-label">Data de Nascimento:</label>
  	<input type="date" class="form-control" name="data_nasc_aluno" value="<?php  print $row->data_nasc_aluno ?>">
  </div>
  <div class="col">
    <label class="form-label">Genero: </label>
    <input type="text" name="genero_aluno" class="form-control" value="<?php print $row->genero_aluno ?>">
  </div>
  <div class="mt-4">
    <button  type="submit" class="btn btn-success">Enviar</button>
  </div>
</form>
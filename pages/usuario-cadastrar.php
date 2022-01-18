<h1>Cadastrar Usuário</h1>
<form class="row g-3" action="?page=usuario-salvar" method="POST">
  <input type="hidden" name="acao" value="cadastrar">

  <div class="col-md-12">
    <label >Nome:</label>
    <input type="text" class="form-control" name="nome_aluno">
  </div>
  <div class="col-md-12">
    <label>Email:</label>
    <input type="email" class="form-control" name="email_aluno">
  </div>
  <div class="col-12">
    <label>Telefone:</label>
    <input type="number" class="form-control" name="fone_aluno">
  </div>
  <div class="col-12">
    <label>RGM:</label>
    <input type="number" class="form-control" name="rgm_aluno" >
  </div>
  <div class="col">
    <label class="form-label">Endereço:</label>
    <input type="text" class="form-control" name="end_aluno">
  </div>
  <div class="col">
  	<label class="form-label">Data de Nascimento:</label>
  	<input type="date" class="form-control" name="data_nasc_aluno">
  </div>
  <div class="col">
    <label class="form-label">Genero: </label>
    <input type="text" name="genero_aluno" class="form-control">
  </div>
  <div class="mt-4">
    <button  type="submit" class="btn btn-success">Enviar</button>
  </div>
</form>
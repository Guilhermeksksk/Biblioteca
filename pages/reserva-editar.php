<h1>Editar Reserva</h1>

<?php  
$sql = "SELECT * FROM reservas WHERE id_reserva=".$_REQUEST['id_reserva'];

	$res = $conn->query($sql) or die($conn->error);

  $row = $res->fetch_object();
?>


<form action="?page=reserva-salvar" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id_reserva" value="<?php print $row->id_reserva; ?>">


    <label>Data de Reserva</label>
     <input type="date" name="data_emprestimo" class="form-control" value="<?php print $row->data_emprestimo; ?>">
     <label>Data devolução</label>
     <input type="date" name="data_devolucao" class="form-control" value="<?php print $row->data_devolucao; ?>">

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
     <button type="submit" class="btn btn-success">Enviar</button>

</form>
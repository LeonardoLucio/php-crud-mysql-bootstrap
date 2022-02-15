<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <?php
  include "connection.php";

 
  $pesquisa = $_POST['busca'] ?? '';
  $query = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
  $dados = mysqli_query($conn, $query);
  ?>

    <div class="container">
    <div class="row">
    <div class="col">
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex" action="pesquisa.php" method="POST">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="busca">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<table class="table table-striped table-sm table-hover">
  <thead>
    <tr>
      <th>nome</th>
      <th>endereço</th>
      <th>telefone</th>
      <th>email</th>
      <th>data de nascimento</th>
      <th>funções</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "connection.php";

    
    while($fetch = mysqli_fetch_assoc($dados)) {
      $cod_pessoa = $fetch['cod_pessoa'];
      $nome = $fetch['nome'];
      $endereco = $fetch['endereco'];
      $telefone = $fetch['telefone'];
      $email = $fetch['email'];
      $data_nascimento = $fetch['data_nascimento'];

      echo "
          <tr>
          <td>$nome</td>
          <td>$endereco</td>
          <td>$telefone</td>
          <td>$email</td>
          <td>$data_nascimento</td>
          <td>
          <a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-primary'>Editar</a>
          <a href='cadastro_delete.php?id=$cod_pessoa' class='btn btn-danger'>Excluir</a>
          </td>
          </tr>
      ";
       
    }
    ?>
  </tbody>
</table>
</div>
</div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração de cadastro</title>
</head>
<body>

<?php 
include 'connection.php';

$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

$dados = mysqli_query($conn, $sql);
$linha = mysqli_fetch_assoc($dados);

?>
<div class="container">
            <div class="row">
                <div class="col">
    <form action="delete_script.php" method="POST">
      
    <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" class="form-control"  placeholder="Digite aqui..." name="nome" value="<?php echo $linha['nome'];?>" >
    </div>
    <div class="mb-3">
    <label for="endereco" class="form-label">Endereco</label>
    <input type="text" class="form-control"  placeholder="Digite aqui..." name="endereco" value="<?php echo $linha['endereco'];?>" >
    </div>
    <div class="mb-3">
    <label for="telefone" class="form-label">Telefone</label>
    <input type="text" class="form-control"  placeholder="Digite aqui..." name="telefone" value="<?php echo $linha['telefone'];?>" >
    </div>
    <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" class="form-control"  placeholder="Digite aqui..." name="email" value="<?php echo $linha['email'];?>" >
    </div>
    <div class="mb-3">
    <label for="data" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control"  placeholder="Digite aqui..." name="data_nascimento" value="<?php echo $linha['data_nascimento'];?>" >
    </div>
    <div class="col-12">
    <button type="submit" class="btn btn-danger">Excluir</button>
    <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa'];?>">
  </div>
    </form>

                </div>
            </div>
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
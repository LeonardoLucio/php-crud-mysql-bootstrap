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
    <div>
        <?php
        include "connection.php";
        $cod_pessoa = $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $email= $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];
        
        //$sql = "INSERT INTO `pessoas`( `nome`, `endereco`, `telefone`, `email`, `data_nascimento`) 
       // VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento')";


        //$sql = "UPDATE `pessoas` SET `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `data_nascimento` = '$data_nascimento' WHERE 'cod_pessoa' = $cod_pessoa";
        $sql = "DELETE FROM `pessoas` WHERE `cod_pessoa` = $cod_pessoa";

        if(mysqli_query($conn, $sql)) {
            echo "$nome cadastro deletado com sucesso";
        } else {
            echo "$nome não foi deletado";
        }
        ?>
    <a href="pesquisa.php" class="btn btn-primary">voltar</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
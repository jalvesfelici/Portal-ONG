<?php

include("conexao.php");

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$sql = "INSERT INTO ong
(nome, descricao, cep, rua, bairro, cidade, estado, telefone, email)

VALUES

('$nome','$descricao','$cep','$rua','$bairro','$cidade','$estado','$telefone','$email')";

mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro Realizado</title>

<link rel="stylesheet" href="css/style.css">

<style>

.sucesso{
    min-height:80vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.card-sucesso{
    background:white;
    padding:40px;
    border-radius:20px;
    text-align:center;
    box-shadow:0 8px 25px rgba(0,0,0,.1);
    max-width:500px;
}

.card-sucesso h1{
    color:#27ae60;
    margin-bottom:20px;
}

.card-sucesso p{
    margin-bottom:25px;
    color:#555;
}

.btn{
    display:inline-block;
    padding:12px 20px;
    text-decoration:none;
    color:white;
    background:#27ae60;
    border-radius:10px;
    margin:5px;
}

.btn-secundario{
    background:#2c3e50;
}

</style>

</head>

<body>

<div class="sucesso">

    <div class="card-sucesso">

        <h1>✅ ONG cadastrada com sucesso!</h1>

        <p>
            Os dados foram salvos no sistema.
        </p>

        <a class="btn" href="listar.php">
            Ver ONGs
        </a>

        <a class="btn btn-secundario" href="cadastro.php">
            Cadastrar Outra
        </a>

    </div>

</div>

</body>
</html>

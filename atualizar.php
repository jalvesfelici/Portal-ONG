<?php

include("conexao.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];

$sql = "UPDATE ong SET
nome='$nome',
descricao='$descricao',
cidade='$cidade',
telefone='$telefone',
email='$email',
cep='$cep',
rua='$rua',
bairro='$bairro',
estado='$estado'
WHERE id=$id";

mysqli_query($conexao, $sql);

header("Location: listar.php");

exit();

?>
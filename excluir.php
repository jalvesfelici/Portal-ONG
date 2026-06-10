<?php

include("conexao.php");

$id = $_GET['id'];

$sql = "DELETE FROM ong WHERE id = $id";

mysqli_query($conexao, $sql);

header("Location: listar.php");
exit();

?>
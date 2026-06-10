<?php
include("conexao.php");

$busca = $_GET['busca'] ?? '';

$sql = "SELECT * FROM ong
        WHERE nome LIKE '%$busca%'";

$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de ONGs</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>

    <nav>
        <a href="index.php">Início</a>
        <a href="listar.php">ONGs</a>
        <a href="cadastro.php">Cadastrar ONG</a>
    </nav>

</header>

<h1>Portal de ONGs Parceiras</h1>

<form method="GET" class="form-busca">

    <input
        type="text"
        name="busca"
        placeholder="Pesquisar ONG..."
        value="<?php echo $busca; ?>">

    <button type="submit">Buscar</button>

</form>

<div class="container">

<?php while($ong = mysqli_fetch_assoc($resultado)){ ?>

    <div class="card">

        <h2><?php echo $ong['nome']; ?></h2>

        <p>
            <?php echo $ong['descricao']; ?>
        </p>

        <p class="cidade">
            📍 <?php echo $ong['cidade']; ?>
        </p>

        <p>
            📞 <?php echo $ong['telefone']; ?>
        </p>

        <p class="email">
            ✉️ <?php echo $ong['email']; ?>
        </p>

        <p class="cep">
            ✉️ <?php echo $ong['cep']; ?>
        </p>
        
        <p class="rua">
            ✉️ <?php echo $ong['rua']; ?>
        </p>

        <p class="bairro">
            ✉️ <?php echo $ong['bairro']; ?>
        </p>

        <p class="estado">
            ✉️ <?php echo $ong['estado']; ?>
        </p>

        

        <div class="acoes">

            <a
                class="btn-editar"
                href="editar.php?id=<?php echo $ong['id']; ?>">
                Editar
            </a>

            <a class="btn-excluir" href="excluir.php?id=<?php echo $ong['id']; ?>"
            onclick="return confirm('Deseja realmente excluir esta ONG?')"> Excluir </a>

        </div>

    </div>

<?php } ?>

</div>

</body>
</html>
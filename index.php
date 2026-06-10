<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Portal ONG</title>

<style>

body{
    margin:0;
    font-family:Arial, sans-serif;
    background:#f4f6f9;
}

header{
    background:#2c3e50;
    color:white;
    padding:20px;
}

nav{
    display:flex;
    justify-content:center;
    gap:30px;
}

nav a{
    color:white;
    text-decoration:none;
    font-weight:bold;
}

.hero{
    text-align:center;
    padding:80px 20px;
}

.hero h1{
    font-size:40px;
    margin-bottom:20px;
}

.hero p{
    font-size:18px;
    color:#555;
}

.botao{
    display:inline-block;
    margin-top:20px;
    background:#27ae60;
    color:white;
    padding:12px 25px;
    border-radius:8px;
    text-decoration:none;
}

.sobre{
    max-width:800px;
    margin:auto;
    padding:50px 20px;
    text-align:center;
}

footer{
    background:#2c3e50;
    color:white;
    text-align:center;
    padding:20px;
    margin-top:50px;
}

</style>

</head>
<body>

<header>

<nav>
    <a href="index.php">Início</a>
    <a href="listar.php">ONGs</a>
    <a href="cadastro.php">Cadastrar ONG</a>
</nav>

</header>

<section class="hero">

<h1>Portal de Apoio às ONGs</h1>

<p>
Conectando organizações, voluntários e doadores.
</p>

<a href="listar.php" class="botao">
Ver ONGs
</a>

</section>

<section class="sobre">

<h2>Sobre o Projeto</h2>

<p>
Este sistema foi desenvolvido para facilitar o cadastro
de ONGs e aproximar pessoas interessadas em ajudar
causas sociais.
</p>

</section>

<footer>
© 2026 - Desenvolvido por Júlia Alves
</footer>

</body>
</html>
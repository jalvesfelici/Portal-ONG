<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar ONG</title>

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

<div class="cadastro-container">

    <div class="cadastro-card">

        <h1>Cadastrar Nova ONG</h1>

        <form action="salvar.php" method="POST">

            <div class="grupo">
                <label for="nome">Nome da ONG</label>
                <input
                    type="text"
                    id="nome"
                    name="nome"
                    required>
            </div>

            <div class="grupo">
                <label for="descricao">Descrição</label>
                <textarea
                    id="descricao"
                    name="descricao"
                    required></textarea>
            </div>

            <div class="grupo">
                <label for="cidade">Cidade</label>
                <input
                    type="text"
                    id="cidade"
                    name="cidade">
            </div>

            <div class="grupo">
                <label for="telefone">Telefone</label>
                <input
                    type="text"
                    id="telefone"
                    name="telefone">
            </div>

            <div class="grupo">
                <label for="email">E-mail</label>
                <input
                    type="email"
                    id="email"
                    name="email">
            </div>

            <div class="grupo">
                <label for="cep">CEP</label>
                <input
                    type="text"
                    id="cep"
                    name="cep">
            </div>

            <div class="grupo">
                <label for="rua">Rua</label>
                <input
                    type="text"
                    id="rua"
                    name="rua">
            </div>

            <div class="grupo">
                <label for="bairro">Bairro</label>
                <input
                    type="text"
                    id="bairro"
                    name="bairro">
            </div>

            <div class="grupo">
                <label for="estado">Estado</label>
                <input
                    type="text"
                    id="estado"
                    name="estado">
            </div>

            <button
                type="submit"
                class="btn-cadastrar">
                Cadastrar ONG
            </button>

        </form>

    </div>

</div>

<script>

document.getElementById("cep").addEventListener("blur", function(){

    let cep = this.value.replace(/\D/g,'');

    if(cep.length != 8){
        return;
    }

    fetch(`https://viacep.com.br/ws/${cep}/json/`)
        .then(response => response.json())
        .then(dados => {

            document.getElementById("rua").value = dados.logradouro || "";
            document.getElementById("bairro").value = dados.bairro || "";
            document.getElementById("cidade").value = dados.localidade || "";
            document.getElementById("estado").value = dados.uf || "";

        });

});

</script>

</body>
</html>
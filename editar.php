<?php

include("conexao.php");

$id = $_GET['id'];

$sql = "SELECT * FROM ong WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);

$ong = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar ONG</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="cadastro-container">

<div class="cadastro-card">    

    <h2>Editar ONG</h2>

        <form action="atualizar.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $ong['id']; ?>">

        <div class="grupo"> 
            <label for="nome">Nome da ONG</label> 
            <input type="text" id="nome" name="nome" 
            value="<?php echo $ong['nome']; ?>" required> 
        
        </div> 
        
        <div class="grupo"> 
            <label for="descricao">Descrição</label> 
            <textarea id="descricao" name="descricao" required>     
                <?php echo $ong['descricao']; ?>
            </textarea> 
        </div> 
        
        <div class="grupo"> 
            <label for="cep">CEP</label> 
            <input type="text" id="cep" name="cep" 
            value="<?php echo $ong['cep']; ?>">
        </div> 
        
        <div class="grupo"> 
            <label for="rua">Rua</label> 
            <input type="text" id="rua" name="rua" value="<?php echo $ong['rua']; ?>"> 
        </div> 
        
        <div class="grupo"> 
            <label for="bairro">Bairro</label> 
            <input type="text" id="bairro" name="bairro" value="<?php echo $ong['bairro']; ?>">
        </div> 

        <div class="grupo"> 
            <label for="cidade">Cidade</label> 
            <input type="text" id="cidade" name="cidade" value="<?php echo $ong['cidade']; ?>"> 
        </div> 
        
        <div class="grupo"> 
            <label for="estado">Estado</label> 
            <input type="text" id="estado" name="estado" value="<?php echo $ong['estado']; ?>"> 
        </div> 
        
        <div class="grupo">
            <label for="telefone">Telefone</label> 
            <input type="text" id="telefone" name="telefone" value="<?php echo $ong['telefone']; ?>"> 
        </div>
        
        <div class="grupo"> 
            <label for="email">E-mail</label> <input type="email" id="email" name="email" value="<?php echo $ong['email']; ?>"> 
        </div> 

        <button type="submit">Salvar Alterações</button>

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
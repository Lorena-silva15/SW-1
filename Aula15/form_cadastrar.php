<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Cadastro de Produtos</h1>

    <?php
    require 'conexao.php';
    $nome = "Teclado Gamer";
    $preco = 199.99;
    $estoque = 10;
    $sql = "INSERT INTO produtos (nome, preco, estoque) VALUES (:nome, :preco, :estoque)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':estoque', $estoque);
    if ($stmt->execute()) {
        echo "<p style='color:green; text-align:center;'>Produto inserido com sucesso!</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>Erro ao inserir produto.</p>";
    }
    ?>

    <form>
        <label>Informe o nome do produto:</label>
        <input type="text" name="nome"  >

        <label>Informe o preço do produto:</label>
        <input type="number" step="0.01" name="preco" >

        <label>Informe a quantidade em estoque:</label>
        <input type="number" name="estoque">

        <div style="text-align:center;">
            <button type="button" disabled ><a href="index.php" class="btn">Cadastrar</a></button>
        </div>
    </form>
     <div style="text-align:center; margin-top:20px;">
        <a href="index.php" class="btn">Voltar</a>
    </div>

    <div class="footer">SW-I - 2025</div>
</div>
</body>
</html>

<?php 
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST['nome'] ?? '';
    $preco = $_POST['preco'] ?? 0;
    $estoque = $_POST['estoque'] ?? 0;

    $sql = "INSERT INTO produtos (nome, preco, estoque) VALUES (:nome, :preco, :estoque)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':estoque', $estoque);

    if ($stmt->execute()) {
        echo "<p style='color:green;'>Produto inserido com sucesso!</p>";
    } else {
        echo "<p style='color:red;'>Erro ao inserir produto.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema Web com CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Bem-vindo ao 1º Sistema Web com CRUD</h1>
    <p>Inserir produto</p>


    <form method="POST">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Preço:</label><br>
        <input type="number" step="0.01" name="preco" required><br><br>

        <label>Estoque:</label><br>
        <input type="number" name="estoque" required><br><br>

        <button type="submit" class="btn">Cadastrar Produto</button>
    </form>

    <div style="text-align:center; margin-top:20px;">
        <a href="index.php" class="btn">Voltar</a>
    </div>

    <div class="footer">SW-I - 2025</div>
</div>
</body>
</html>

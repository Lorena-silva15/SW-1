<?php
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'] ?? 0;
    $novoPreco = $_POST['preco'] ?? 0;

    $sql = "UPDATE produtos SET preco = :preco WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':preco', $novoPreco);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "<p style='color:green;'>Produto atualizado com sucesso!</p>";
    } else {
        echo "<p style='color:red;'>Erro ao atualizar produto.</p>";
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

    <form method="POST">
        <label>ID do produto:</label><br>
        <input type="number" name="id" required><br><br>

        <label>Novo preço:</label><br>
        <input type="number" step="0.01" name="preco" required><br><br>

        <button type="submit" class="btn">Atualizar</button>
    </form>

    <div style="text-align:center; margin-top:20px;">
        <a href="index.php" class="btn">Voltar</a>
    </div>
    <div class="footer">SW-I - 2025</div>
</div>
</body>
</html>

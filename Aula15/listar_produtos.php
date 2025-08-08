<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Lista de Produtos</h1>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Opções</th>
        </tr>
        <?php
            require 'conexao.php';
            $sql = "SELECT * FROM produtos";
            $stmt = $pdo->query($sql);
            while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $produto['id'] . "<br>";
            echo "Nome: " . $produto['nome'] . "<br>";
            echo "Preço: R$" . $produto['preco'] . "<br>";
            echo "Estoque: " . $produto['estoque'] . "<br><br>";
            }
        ?>
    </table>
    <div class="footer">SW-I - 2025</div>
</div>
</body>
</html>

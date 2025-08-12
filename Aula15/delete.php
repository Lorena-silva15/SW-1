<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema Web com CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Excluir produto</h1>
    
    <div style="text-align:center;">
        <?php
            require 'conexao.php';
            $id = 1;
            $sql = "DELETE FROM produtos WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $id);
            if ($stmt->execute()) {
              echo "Produto excluído com sucesso!";
            } else {
                 echo "Erro ao excluir produto.";
            }
        ?>
    </div>
     <div style="text-align:center; margin-top:20px;">
        <a href="index.php" class="btn">Voltar</a>
    </div>
    <div class="footer">SW-I - 2025</div>
</div>
</body>
</html>
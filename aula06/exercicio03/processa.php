<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabela de Produtos</title>
    <style>
        body{
            background-color: rgb(176, 185, 185);
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-left:Auto;
            margin-right:auto;
        }
        h2{
            margin-left:40%;
            
        }

        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: white;
        }

        /* Cores por categoria */
        .eletronico {
            background-color: #d1e7ff;
        }

        .livro {
            background-color: #fff0d4;
        }

        .roupa {
            background-color: #e0ffd8;
        }

        .alimento {
            background-color: #ffe4e4;
        }
    </style>
</head>
<body>

<h2>Tabela de Produtos</h2>

<?php
// Array associativo com produtos fictícios
$produtos = [
    ['nome' => 'Notebook Dell', 'preco' => 3500.00, 'categoria' => 'eletronico'],
    ['nome' => 'Camisa Polo', 'preco' => 79.90, 'categoria' => 'roupa'],
    ['nome' => 'Arroz 5kg', 'preco' => 25.50, 'categoria' => 'alimento'],
    ['nome' => 'Livro PHP Básico', 'preco' => 45.00, 'categoria' => 'livro'],
    ['nome' => 'Smartphone XYZ', 'preco' => 2800.00, 'categoria' => 'eletronico'],
    ['nome' => 'Calça Jeans', 'preco' => 120.00, 'categoria' => 'roupa'],
];

echo "<table>";
echo "<tr>
        <th>Nome</th>
        <th>Preço (R$)</th>
        <th>Categoria</th>
      </tr>";

foreach ($produtos as $produto) {
    $categoria = $produto['categoria'];
    echo "<tr class='$categoria'>";
    echo "<td>{$produto['nome']}</td>";
    echo "<td>" . number_format($produto['preco'], 2, ',', '.') . "</td>";
    echo "<td>" . ucfirst($categoria) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>

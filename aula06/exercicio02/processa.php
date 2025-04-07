<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabela Gerada</title>
    <style>
       body{
            background-color:#ffd6ff;
            text-align:center
        }

        tr:nth-child(even){
            background-color:#c8b6ff

        }
        tr{
            background-color:#b8c0ff
            ;

        }
        table{
            width:80%;
            border-collapse:collapse;
            padding:5%;
            margin-left:auto;
            margin-right:auto;
            margin-top:20%;
            border: 3px solid black;
        }

        td,tr,th{
            padding:5%;
            border: 3px solid black;
        }
        th{
            background-color:#cae9ff
        }
    </style>
</head>
<body>

<h2>Tabela Gerada</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $linhas = (int) $_POST['linhas'];
    $colunas = (int) $_POST['colunas'];

    echo "<p>Tabela com $linhas linhas e $colunas colunas:</p>";
    echo "<table>";

    // Cabeçalho da tabela
    echo "<tr>";
    $j = 0;
    while ($j < $colunas) {
        echo "<th>Coluna $j</th>";
        $j++;
    }
    echo "</tr>";

    // Corpo da tabela
    $i = 1;
    while ($i < $linhas) {
        echo "<tr>";
        $j = 0;
        while ($j < $colunas) {
            echo "<td>L$i-C$j</td>";
            $j++;
        }
        echo "</tr>";
        $i++;
    }

    echo "</table>";
} else {
    echo "<p>Erro: os dados não foram enviados corretamente.</p>";
}
?>

</body>
</html>

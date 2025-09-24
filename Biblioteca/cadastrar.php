<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Inserir Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --cor-escura: #003049;
            --cor-vermelha: #C1121F;
            --cor-vinho: #780000;
            --cor-bege: #FDF0D5;
            --cor-azul-claro: #669BBC;
        }

        body {
            background-color: var(--cor-bege);
            font-family: Arial, sans-serif;
            padding-top: 50px;
            text-align: center;
        }

        .mensagem {
            padding: 30px;
            margin: 0 auto;
            max-width: 600px;
            border: 2px solid var(--cor-escura);
            background-color: #fefae0;
            border-radius: 10px;
        }

        h1 {
            color: var(--cor-escura);
        }

        .btn {
            background-color: grey;
            color: white;
            border: solid 2px var(--cor-vinho);
            padding: 10px 25px;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: var(--cor-vinho);
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>

<div class="mensagem">
    <?php
            require 'conexao.php';

            // Recebe os dados do formulário
            $titulo = $_POST['titulo'] ?? '';
            $genero = $_POST['genero'] ?? '';
            $autor  = $_POST['autor'] ?? '';
            $ano    = $_POST['ano'] ?? '';
            $paginas = $_POST['paginas'] ?? '';

            if ($titulo && $genero && $autor && $ano && $paginas) {
                $sql = "INSERT INTO livros (titulo, genero, autor, ano, paginas) 
                        VALUES (:titulo, :genero, :autor, :ano, :paginas)";
                $stmt = $pdo->prepare($sql);

                $stmt->bindParam(':titulo', $titulo);
                $stmt->bindParam(':genero', $genero);
                $stmt->bindParam(':autor', $autor);
                $stmt->bindParam(':ano', $ano);
                $stmt->bindParam(':paginas', $paginas);

                if ($stmt->execute()) {
                    echo "<h1>Livro inserido com sucesso!</h1>";
                } else {
                    echo "<h1 style='color: var(--cor-vermelha);'>Erro ao inserir livro.</h1>";
                }
            } else {
                echo "<h1 style='color: var(--cor-vermelha);'>Preencha todos os campos.</h1>";
            }
    ?>

    <a href="listar.php" class="btn">Voltar para a lista</a>
</div>

</body>
</html>

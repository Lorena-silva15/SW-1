<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Biblioteca</title>
    <style>
        :root {
            --cor-escura: #003049;
            --cor-vermelha: #C1121F;
            --cor-vinho: #780000;
            --cor-bege: #FDF0D5;
            --cor-azul-claro: #669BBC;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: var(--cor-bege);
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
        }

        h1 {
            color: var(--cor-escura);
            margin-bottom: 30px;
        }

        .btn-custom {
            background-color: var(--cor-vermelha);
            color: white;
            border: none;
            padding: 10px 25px;
            margin: 10px;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .btn-custom:hover {
            background-color: var(--cor-vinho);
        }

        .btn-custom:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(193, 18, 31, 0.25);
        }
    </style>
</head>
<body>
    <div class="container">
        <?php include_once 'pedaco.php'; ?>

        <h1>Biblioteca</h1>
        <a href="listar.php" class="btn-custom">Listar Livros</a>
        <a href="form_cadastrar.php" class="btn-custom">Cadastrar Livros</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

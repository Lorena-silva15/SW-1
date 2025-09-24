<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <title>Listar</title>

    <style>
        :root {
            --cor-escura: #003049;
            --cor-vermelha: #C1121F;
            --cor-vinho: #780000;
            --cor-bege: #FDF0D5;
            --cor-azul-claro: #669BBC;
        }

        body{
            background-color: var(--cor-bege)
        }
        .container{
            text-align:center;
            justify-items:space-between;
            
        }

        th,td{padding:3%;
           
            
            
        }
        th{
            background-color: var(--cor-vinho);
            color: white
        }

        table{
            width: 90%;
            margin-left:auto;
            margin-right:auto;
            margin-top:4%;
            border:2px solid;
            padding: 2%;
            border-color:var(--cor-escura);
            background-color: #fefae0

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
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: var(--cor-vinho);
        }

        .btn:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(193, 18, 31, 0.25);
        }
        .btn1 {
            background-color: grey;
            color: white;
            border: solid 2px var(--cor-azul-claro);
            padding: 10px 25px;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .btn1:hover {
            background-color: var(--cor-escura);
        }

        .btn1:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(193, 18, 31, 0.25);
        }
        a{
            text-decoration:none;
            color:white
        }


    </style>
</head>
<body>

 
    <div class="container">  
         <?php
            include_once 'pedaco.php';
            include_once 'conexao.php';
        ?>

         <H1>Lista de Livros</H1>
        <table>
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Gênero</th>
                        <th scope="col">Ano</th>
                        <th scope="col">Páginas</th>
                        <th scope="col">Opções</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <?php
        
                        $sql = "SELECT * FROM livros";
                        $stmt = $pdo->query($sql);
                        while  ($livros = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                                                    
                        echo "<td>" . $livros['id'] . "</td>";
                        echo "<td> ".$livros['titulo'] . "</td>";
                        echo "<td> " . $livros['autor'] . "</td>";
                        echo "<td> " . $livros['genero'] . "</td>";
                        echo "<td> " . $livros['ano'] . "</td>";
                        echo "<td> " . $livros['paginas'] . "</td>";
                        echo "<td>
                                <div>
                                    <button class='btn1'> <a href='form_atualizar.php?id=". $livros['id'] ."'>Atualizar</a></button>
                                    <button class='btn'> <a href='delete.php?id=". $livros['id'] ."'>Deletar</a></button>
                                </div>
                             </td> ";

                        echo "</tr>";
                    
                        }
                    ?>


                </tbody>
        </table>

        <button class='btn'><a href="index.php">Voltar</a></button>
    </div>

    



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>
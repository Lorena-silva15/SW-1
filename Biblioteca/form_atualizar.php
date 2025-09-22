<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <title>Formulário </title>
    <style>
         :root {
            --cor-escura: #003049;
            --cor-vermelha: #C1121F;
            --cor-vinho: #780000;
            --cor-bege: #FDF0D5;
            --cor-azul-claro: #669BBC;
        }
       

        body{
            
            justify-content: center;
            align-items: center;
            
            background-color: var(--cor-bege);
        }

        .container{
            margin-top:3%;
            text-align:center;
            
        }

        .input{
            width: 36%;
            margin-left:5%;
            margin-right:5%
        }

        .env{
            display:flex;
            justify-content:space-around;
            margin-top:2%;
            width:50%;
            margin-left:auto;
            margin-right:auto
        }
        .btn {
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

        .btn:hover {
            background-color: var(--cor-vinho);
        }

        .btn:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(193, 18, 31, 0.25);
        }
        a{
            text-decoration:none;
            color:white
        }

        .btn1 {
            background-color: var(--cor-azul-claro);
            color: black;
            border: none;
            padding: 10px 25px;
            margin: 10px;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s;
        }

        .btn1:hover {
            background-color: var(--cor-escura);
       
        }
        
    </style>
</head>
<body>
    
    

    <div class="container">
        <?php
            include_once 'pedaco.php';

            
            $id = $_GET['id'];
            // echo "Valor: ".$id;

            include_once 'conexao.php';


        ?>
        <h1> Atualizar livro</h1>
            <form action="atualizar.php?id=<?php echo $id ?> >" method="POST" class="formulario">


            <?php
                $sql = "SELECT * FROM livros where id = $id";
                $stmt = $pdo->query($sql);
                while ($livros = $stmt->fetch(PDO::FETCH_ASSOC)) {
                
                    echo "<label>TÍTULO DO LIVRO: </label> <input type='text' name='novo_titulo' class='form-control ' placeholder='titulo' value=' ". $livros['titulo'] ."'require '<br>";
                    echo "<label>AUTOR DO LIVRO: </label> <input type='text' name='novo_autor' class='form-control' value=' ". $livros['autor'] ."'require '<br>";
                    echo "<label>GÊNERO DO LIVRO: </label> <input type='text' name='novo_genero' class='form-control' value=' ". $livros['genero'] ."'require '<br>";
                    echo "<label>ANO DO LIVRO: </label> <input type='' min='0' name='novo_ano' class='form-control' value=' ". $livros['ano'] ."'require '<br>";
                    echo "<label>NÚMERO DE PÁGINAS DO LIVRO: </label> <input type='' min='0' name='novo_paginas' class='form-control' value=' ". $livros['paginas'] . "'require '<br>";
                 
                }




            ?>
               

             <!-- / <label >Selecione o gênero do livro:</label>
                <select class="form-select" aria-label="Default select example"  require>
                    <option selected>Gêneros</option>
                    <option value="1">Românce</option>
                    <option value="2">Aventura</option>
                    <option value="3">Drama</option>
                    <option value="4">Terror</option>
                    <option value="5">Fantasia</option>
                    <option value="6">Biográfia</option>
                    <option value="7">Autobiografia</option>
                    <option value="8">Ficção Cientifica</option>
                    <option value="9">Suspense</option>
                </select>// -->

                
               

                <div class="env">
                    <button class=" btn " type="submit">Atualizar</button>
                    
                    <button  class=" btn1 "><a href="index.php">Voltar</a></button>
                </div>



            </form>
            
           
            
    </div>
    

    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>
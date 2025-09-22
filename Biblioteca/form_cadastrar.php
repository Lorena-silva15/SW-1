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
            margin-top:8%;
            text-align:center
        }

        .input{
            width: 36%;
            margin-left:5%;
            margin-right:5%
        }

        .env{
            display:flex;
            justify-content:space-around;
            margin-top:5%;
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
        <h1> Cadastre seu livro</h1>
            <form action="cadastrar.php" method="POST" class="formulario">
                <input type="text" name="titulo" class="form-control" placeholder="Digite o título do livro" require>


                <input type="text" name="genero" class="form-control" placeholder="Digite o gênero do livro" require>

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

                
                <input type="text" name="autor"   class="form-control" placeholder="Digite o autor do livro" require>

                <input type="number"  min="0"  name="ano"  class="input" placeholder="Digite o ano livro" require>
                <input type="number"  min="0"  name="paginas" class="input" placeholder="Digite a quantidade de páginas do livro" require  >

                <div class="env">
                    <button class=" btn " type="submit">Enviar formulário</button>
                    
                    <button  class=" btn1 "><a href="index.php">Voltar</a></button>
                </div>



            </form>
            
           
            
    </div>
    

    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</html>
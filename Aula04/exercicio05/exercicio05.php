<?php
$cor = "#ffffff"; 


$cor = ($_POST["cor"]); 

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chewy&display=swap" rel="stylesheet">
    
    <title>EXERCICIO05</title>
    <style>
        .container{
            width: 40%;
            height: 80%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10%;
            margin-bottom: 10%;
            background-color: rgb(238, 233, 207);
            text-align: left;
        
            border-radius: 15px;
            padding: 1%;
        }


        body{
            width: 100%;
            height: 100%;
            font-family: "Chewy";
            font-weight:200;
            
        }

        h1{
            text-align: center;
            margin-bottom: 5%;
        }

        p {
            margin-top: 2%;
            padding-left: 5%;
            
            font-size:150%;
            width: 100%;

        
        }

        .submit{
            width: 90%;
            text-align: center;
            border-color: rgb(146, 89, 139);
            border-radius: 7px;
            margin-left: auto;
            margin-right: auto;
            padding: 1%;
            font-family: "Chewy";
            font-weight: 500;
            font-size: 120%;
            margin-top: 4%;
        }

        input{
            margin-left: 5%;
            width: 15%;
            
            border-radius: 10%;
            border-color: rgba(240, 248, 255, 0);
        }


    </style>
</head>

<body style="background-color:<?php echo $cor; ?>;">
    <div class="container" >

        <h1 style>Exercício 05 POST</h1>
       
        <form  method="POST">
            <p >
                Selecione uma cor: 
                <input type="color" name="cor" >
            </p>
            <p>
                <input class="submit"  type="submit" value="Aplicar Cor">
            </p>
        </form>
    </div>

    

</body>
</html>
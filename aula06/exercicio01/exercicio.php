<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

<table>


         <tr>
            <th>Cabeçalho 1</th>
            <th>Cabeçalho 2</th>
            <th>Cabeçalho 3</th>
        </tr>
        <?php

        for ($i=1;$i <=4 ; $i++){
            echo"<tr>";
            for ($c=1;$c <=3 ; $c++){
                echo "<td> Linha $i Coluna $c</td>"

           ; }
            echo"</tr>";

        }



        ?>

    
</body>
</html>
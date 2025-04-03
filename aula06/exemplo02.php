<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,tr,th{
            border:2px solid black;
        }
    </style>
</head>

<body>

    <table>


         <tr>
            <th>ID</th>
            <th>ID</th>
            <th>ID</th>
        </tr>
        <?php

        for ($i=1;$i <=4 ; $i++){
            echo"<tr>";
            for ($c=1;$c <=3 ; $c++){
                echo "<td> Linha $I Coluna $c</td>"

            }
            echo"</tr>";

        }



        ?>

<!-- 
        
        <tr>
            <td>Linha 1 Coluna 1</td>

            <td>Linha 1 Coluna 2</td>

            <td>Linha 1 Coluna 3</td>
        </tr>
        
        <tr>
            <td>Linha 2Coluna 1</td>

            <td>Linha 2Coluna 2</td>

             <td>Linha2 Coluna 3</td>
            
        </tr>

        <tr>
            <td>Linha 3 Coluna 1</td>
        
            <td>Linha 3 Coluna 2</td>
        
            <td>Linha 3 Coluna 3</td>
        </tr>

        <tr>
            <td>Linha 4 Coluna 1</td>
        
            <td>Linha 4 Coluna 2</td>
        
            <td>Linha 4 Coluna 3</td>
        </tr>
    </table> -->
    
</body>
</html>
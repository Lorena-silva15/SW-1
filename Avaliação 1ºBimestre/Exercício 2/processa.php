<?php
    $temp=$_GET['temp'];

    $far= ($temp*(9/5))+32;
    $kel= $temp+273.15;
    



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
           div{
            width: 80%;
            background-color: rgb(83, 160, 233);
            border-radius: 5%;
            padding: 2%;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-top: 18%;
            margin-bottom: auto;

        }

        body{
            background-color:rgb(29, 98, 158) ;
            text-align: center;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            
        }

        p{
            font-size: xx-large;
        }
        h1{
            font-size: xx-large;

        
        }
        table,th,td{
            border:2px solid black;
            border-collapse: collapse;
            padding: 5%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 5%;
            margin-bottom: auto;
            font-size: x-large;


        }

        th{
            background-color:rgb(66, 133, 209)
        }
        td{
            background-color:rgb(143, 190, 243)

        }
       

    </style>
    <title>Document</title>
</head>
<body>

    <div>
        <h1>
            Conversão
        </h1>

        <table>

            <tr>
                <th>
                    Temperatura em Graus Célcius
                </th>
                <th>
                    Temperatura em Graus Fahrenheit
                </th>

                <th>
                    Temperatura em Graus Kelvin
                </th> 
            </tr>
            <tr>
                <td><?php  echo "$temp graus Célcius" ?> </td>
                <td><?php  echo "$far graus Fahrenheit" ?></td>
                <td><?php  echo "$kel graus Kelvin "?></td>
            </tr>

      
        </table>
    </div>
    
</body>
</html>
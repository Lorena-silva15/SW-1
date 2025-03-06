<?php
  
   $numero1 = $_GET['numero1'] ;
   $numero2 = $_GET['numero2'] ;
   $numero3 = $_GET['numero3'] ;

   $numeromaior= 0;

   if ($numero1 > $numero2 && $numero1 >$numero3){
    $numeromaior+= $numero1;}
   
  
   if ($numero2 > $numero1 && $numero2 > $numero3){ 
    $numeromaior += $numero2;}

   if ($numero3>$numero2 && $numero3 > $numero1) {$numeromaior+=$numero3;}


    

  

   echo " $numeromaior"
   


?>
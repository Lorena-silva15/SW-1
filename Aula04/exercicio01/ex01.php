<?php
   $nome=$_GET['cxnome'];
   $nt1 = $_GET['nt1'] ;
   $nt2 = $_GET['nt2'] ;
   $nt3 = $_GET['nt3'] ;

   $soma=$nt1+$nt2+$nt3;
   $media= $soma/3;

  

   echo " seu nome é :$nome , a soma de suas notas é: $soma, e a sua média é $media"
   


?>
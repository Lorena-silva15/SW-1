<?php
    include_once 'conta.php';

  $cliente1= new conta();

  $cliente1->Nome="paola";
  $cliente1->CPF="17599378-60";
  $cliente1->Saldo="";

  $cliente1->MostrarSaldo();
  
  echo "<hr>";

  
  $cliente1->depositar(500);

  echo "<hr>";

  $cliente1->MostrarSaldo();

  

  $cliente1->sacar(2);

   echo "<hr>";

  $cliente1->MostrarSaldo();

?>
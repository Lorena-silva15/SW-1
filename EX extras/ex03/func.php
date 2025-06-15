<?php

include_once "Funcionario.class.php";

$func1= new Funcionario("Paola",1000);

echo $func1->exibirInformacoes();

echo "<br>";

echo $func1->aumentarSalario($salario,10);
echo $func1->setSalario();

echo $func1->exibirInformacoes();

echo "<br>";


?>
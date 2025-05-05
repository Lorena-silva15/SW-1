<?php

include_once 'Carro.class.php';

$car1= new Lampada;
$car2= new Lampada;
$car3= new Lampada;
$car4= new Lampada;
$car5= new Lampada;

$car1->Marca="Toyota";
$car1->Modelo="Corola Altis";
$car1->Combustivel="Gasolina/Etanol ";
$car1->Portas=4;
$car1->Capacidade_tanque="50 Litros";

$car2->Marca="Volskwagen";
$car2->Modelo="Polo MSI";
$car2->Combustivel="Gasolina/Etanol";
$car2->Portas=4;
$car2->Capacidade_tanque="52 Litros";

$car3->Marca="Honda";
$car3->Modelo="HR-V Touring";
$car3->Combustivel="Gasolina";
$car3->Portas=4;
$car3->Capacidade_tanque="53 Litros";

$car4->Marca="Chevrolet";
$car4->Modelo="Onix LT";
$car4->Combustivel="Gasolina/Etanol";
$car4->Portas=4;
$car4->Capacidade_tanque="44 Litros";

$car5->Marca="Ford";
$car5->Modelo="Ranger XLT";
$car5->Combustivel="Diesel";
$car5->Portas=4;
$car5->Capacidade_tanque="80 Litros";



$car1->mostrarDados();
$car2->mostrarDados();
$car3->mostrarDados();
$car4->mostrarDados();
$car5->mostrarDados();


?>
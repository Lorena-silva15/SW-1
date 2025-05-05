<?php

include_once 'Lampada.class.php';

$lamp1= new Lampada;
$lamp2= new Lampada;

$lamp1->Fabricante="OSRAM";
$lamp1->Tensao=110;
$lamp1->Potencia=50;
$lamp1->Cor="Branca";
$lamp2->Fabricante="OuroLux";
$lamp2->Tensao=110;
$lamp2->Potencia=50;
$lamp2->Cor="Azul";

$lamp1->Ligar();
$lamp2->Desligar();

$lamp1->mostrarDados();
$lamp2->mostrarDados();

?>
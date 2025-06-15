<?php
include_once 'Retangulo.class.php';

$ret1= new Retangulo(2,5);

$ret1->getLargura;
$ret1->getAltura;

echo "<br>";

$ret1->setLargura(3);
$ret1->setAltura(4);
echo "<br>";
$ret1->getLargura;
$ret1->getAltura;

echo "<br>";

$ret1->area($altura,$largura);

echo "<br>";

$ret1->perimetro($altura,$largura);






?>
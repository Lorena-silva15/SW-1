<?php
include_once 'Livro.class.php';

$usr1= new Livro("Pequeno Príncipe","Fulano",false);

echo $usr1->exibirStatus();


?>
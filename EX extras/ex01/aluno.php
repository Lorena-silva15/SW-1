<?php
    include_once 'Aluno.class.php';

    $fulano = new Aluno("Fulano da Silva",5,7);
    echo "Nome: ".$fulano->getNome($fulano);
    echo "<br>";
    echo "Primeira Nota: ".$fulano->getNota1();
    echo "<br>";
    echo "Segunda Nota: ".$fulano->getNota2();
    echo "<br>";
    echo "Media Total: ".$fulano->CalcularMedia($fulano->getNota1(),$fulano->getNota2());
    echo "<br>";
    echo $fulano->VerificarSituacao($fulano->getNota1(),$fulano->getNota2());














?>
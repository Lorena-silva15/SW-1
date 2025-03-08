<?php
$loginV = "etec";
$senhaV = "informatica";

$login = $_POST['login'] ;
$senha = $_POST['senha'] ;

if (($login == $loginV) && ($senha == $senhaV)) {
    echo "Logado com Sucesso";
} 
   else {
    echo "Falha ao logar";
}
?>

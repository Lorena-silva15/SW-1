<?php
require 'conexao.php';

$id = $_GET['id'];
$novo_titulo = $_POST['novo_titulo'];
$novo_autor = $_POST['novo_autor'];
$novo_genero = $_POST['novo_genero'];
$novo_ano = $_POST['novo_ano'];
$novo_paginas = $_POST['novo_paginas'];

// Consulta SQL corrigida
$sql = "UPDATE livros 
        SET titulo = :novo_titulo, 
            autor = :novo_autor, 
            genero = :novo_genero, 
            ano = :novo_ano, 
            paginas = :novo_paginas
        WHERE id = :id";

// Prepara a consulta
$stmt = $pdo->prepare($sql);

// Vincula os parâmetros
$stmt->bindParam(':novo_titulo', $novo_titulo);
$stmt->bindParam(':novo_autor', $novo_autor);
$stmt->bindParam(':novo_genero', $novo_genero);
$stmt->bindParam(':novo_ano', $novo_ano);
$stmt->bindParam(':novo_paginas', $novo_paginas);
$stmt->bindParam(':id', $id);

// Executa a consulta
if ($stmt->execute()) {
    echo "Livro atualizado com sucesso!";
} else {
    echo "Erro ao atualizar livro";
}
?>

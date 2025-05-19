<?php
    include_once 'produto.class.php';

   $pdt1=new Produto("Mouse", 100.00, 10);

   $pdt1->mostrarDetalhes();

   echo"<hr>";

   $pdt1->setPreco(150.00);

   $pdt1->mostrarDetalhes();

   echo"<hr>";

   $pdt1->adicionarEstoque(5);


   $pdt1->mostrarDetalhes();

   $pdt1->removerEstoque(3);


   echo"<hr>";
 
   $pdt1->mostrarDetalhes();

   echo"<hr>";















?>
<?php

    class Lampada{
        public $Marca;
        public $Modelo;
        public $Combustivel;
        public $Portas;
        public $Capacidade_tanque;



        public function mostrarDados(){
            echo"Marca: ". $this->Marca."<br>";
            echo"Modelo: ". $this->Modelo."<br>";
            echo"Portas: ". $this->Portas."<br>";
            echo"Capacidade_tanque: ". $this->Capacidade_tanque."<br>";
        
           
            echo "<br>"."<hr>";
        }



    }







?>

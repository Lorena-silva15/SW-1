<?php

    class Pessoa{
        public $Nome;
        public $Peso;
        public $Altura;

        public function mostrarDadosPessoa(){
            echo "Nome da Pessoa: " . $this->Nome."<br>";
            echo "Peso da Pessoa: " . $this->Peso."<br>";
            echo "Altura da Pessoa: " . $this->Altura."<br>";
        }
    }


    $fulano= new Pessoa;

    $fulano->Nome= 'Fulano da Silva';
    $fulano->Peso=85;
    $fulano->Altura=1.85;

    $fulano->mostrarDadosPessoa()



?>
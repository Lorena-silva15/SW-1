<?php
    class Livro{
        private $Titulo;
        private $Autor;
        private bool $Disponivel;

        public function __construct($tit,$autor,$disp){
            $this->Titulo = $tit;
            $this->Autor = $autor;
            $this->Disponivel=$disp;
        }
        public function getTitulo(){
            return $this->Titulo;
        }
        public function getAutor(){
            return $this->Autor;
        }
        public function getDisponibilidade(){
            return $this->Disponivel;
        }
        public function emprestar(){
            if ($this->Disponivel) {
                $this->Disponivel = false;  
                echo "O livro '{$this->Titulo}' foi emprestado.";
            } else {
                echo "O livro$this->Titulo}' disponível.";
            }
        }

        public function exibirStatus(){
            echo "Título : ". $this->getTitulo;
            echo "Autor : ". $this->getAutor;
            echo "Disponibilidade : ". $this->emprestar;



        }
    
        }









?>
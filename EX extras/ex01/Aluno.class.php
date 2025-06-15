<?php
    class Aluno{
        private $Nome;
        private $Nota1;
        private $Nota2;

        public function __construct($nome,$nt1,$nt2){
            $this->Nome = $nome;
            $this->Nota1 = $nt1;
            $this->Nota2 = $nt2;
        }
        public function getNome(){
            return $this->Nome;
        }
        public function getNota1(){
            return $this->Nota1;
        }
        public function getNota2(){
            return $this->Nota2;
        }
        public function CalcularMedia($nt1,$nt2){
            $media= ($nt1+$nt2)/2;
            return $media;
        }
        public function VerificarSituacao($media){
            if($media>=7){
                echo "SITUAÇÃO: APROVADO";
            } else{
                echo "SITUAÇÃO: REPROVADO";
            }
        }
    }







?>
<?php
    class Funcionario{

        private $Nome;
        private $Salario;



        public function __construct($nome,$salario){
            $this->Nome = $nome;
            $this->Salario = $salario;
            
        }

        public function aumentarSalario($salario, $porcentagem){
            $novosalario=$this->salario +(($this->salario * $this->porcentagem)/100);


        }

        public function setSalario($salario){
            $this->novosalario = $salario;
        }

        public function exibirInformacoes($nome,$salario){

            echo" Nome do Funcionário:" . $this->nome;
            echo "Salário : ". $this->salario;
        }

    }




?>
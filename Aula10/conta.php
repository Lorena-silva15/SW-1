<?php

    class conta{

        public $Nome;
        public $CPF;
        public $Saldo;

        public function sacar($valor){

            if ($this->Saldo>= $valor){
                $this->Saldo=$this->Saldo - $valor;
                $texto="Saque realizado .Saldo Atual é de : R$".$this->Saldo;
                return $texto;
            }

            else{
                return"Saldo Insuficiente";
            }
            
    
            return $this->Saldo;
    
        }

        public function depositar($valor){
            $this->Saldo += $valor;
            $texto="Depósito realizado .Saldo Atual é de : R$". $this->Saldo;
            return $texto;
        }

        public function MostrarSaldo(){

            echo "Nome do Cliente :" . $this->Nome. "<br>";
            echo "CPF do Cliente :" . $this->CPF. "<br>";
            echo "Saldo do disponível : R$" . $this->Saldo. "<br>";

        }
}
?>
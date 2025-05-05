<?php

    class Lampada{
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $status;


        public function Ligar(){
           
            $this->status=1;
        }


        public function Desligar(){

            $this->status=0;
        }

        public function mostrarDados(){
            echo"Fabricante: ". $this->Fabricante."<br>";
            echo"Tensao: ". $this->Tensao."<br>";
            echo"Potencia: ". $this->Potencia."<br>";
            echo"Cor: ". $this->Cor."<br>";
            if($this->status==1){
                 echo "Lâmpada Acessa!";
            }else{
                echo "Lâmpada Apagada!";
            }

           
            echo "<br>"."<hr>";
        }



    }







?>

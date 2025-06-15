<?php

class Retangulo{
    private $Largura;
    private $Altura;




    public function __construct($largura,$altura){
        $this->Largura = $largura;
        $this->Altura = $altura;

    }


    public function getLargura($largura){
        return $this->largura;
    }

    public function getAltura($altura){
        return $this->altura;
    }

    public function setLargura($largura) {
        $this->Largura=$largura;
        
    }

     public function setAltura($altura) {
        $this->Altura=$altura;
        
    }


    public function perimetro($altura,$largura){
        $perimetro= ($this->altura* 2) + ($this->largura*2);
        echo "O perímetro do retângulo é : ". $this->perimetro;

    }

    public function area($altura,$largura){
        $area= $this->altura * $this->largura;
        echo "A área do retãngulo é:". $this->area;
    }






}










?>
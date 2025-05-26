<?php
        class Produto{
                private $Nome;
                private $Preco;
                private $Quantidade;


                public function __construct($nome,$preco=0,$quant=0){
                    $this->Nome=$nome;
                    $this->Preco=$preco;
                    $this->Quantidade=$quant;
                }



                //Nome

                public function setNome($nome){


                    $this->Nome=$nome;
                }

                public function getNome($nome){
                    return $this->Nome;
                }


              //  Preço//

                public function setPreco($preco){

                    if($preco>=0){

                        $this->Preco=$preco;
                    }
                    
                    else{
                        echo "Preço Inválido";
                    }

                     
                }

                public function getPreco($preco){
                    return $this->Preco;
                }




                 //  Quantidade//

                 public function setQuantidade($quant){

                    if($quant>=0){

                        $this->Quantidade=$quant;
                    }
                    
                    else{
                        echo "Quan Inválido";
                    }

                     
                }

                public function getQuantidade($quant){
                    return $this->Quantidade;




                }


                public function adicionarEstoque($quant){

                    if ($quant >=0) {
                        $this->Quantidade+= $quant;
                    }

                    else{
                        "Necessário valor maior";
                    }

                }




                public function removerEstoque($quant){

                    if ($quant >0) {
                        $this->Quantidade-= $quant;
                    }

                    else{
                        "Necessário valor maior";
                    }
                }














                //mostrar detalhes

                public function mostrarDetalhes(){
                    echo "Nome do produto: {$this->getNome} <br>";
                    echo "Preço do produto: {$this->getPreco} <br>";
                    echo "Quantidade do produto: {$this->getQuantidade} <br>";
                }





        } 












?>

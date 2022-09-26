<?php 

    class Manual {

        private $embreagem;

        
        public function __construct($situacao){

            if(is_bool($situacao)){

               $this->embreagem = $situacao;

            } else{
            
                return false;
            
            }


        }

        public function pisarNaEmbreagem(){

            return true; 

        }


        public function soltarEmbreagem(){

            return true;

        }


        public function acelerar($rpm){

            if (is_int($rpm)){
                return true;
            }else{
                return false;
            }

        }




    } 


?>
<?php

class Cambio {

    private $marcha;


    public function __construct($marcha){

    

            $this->marcha = $marcha;
        }
        
    
    public function getMarcha(){

        return $this->marcha;

    }

    public function setMarcha($num){

            $this->marcha = $num;        
    }
}
?>
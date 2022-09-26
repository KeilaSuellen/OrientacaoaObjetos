<?php

class veiculosrodoviarios{
protected $nrodas;
protected $npassageiros;


    protected function setanrodas($nrodas){

     if(is_numeric($nrodas)&&($nrodas > 0 ))

     $this->rodas = $nrodas;

    }

  protected  function pegarodas(){
        return $this->rodas;
    }

    protected function setanpassageiros($npassageiros){

        if(is_numeric($npassageiros)&&($npassageiros > 0 ))
   
        $this->passageiros = $npassageiros;
   
       }
   
       protected function pegapassageiros(){
           return $this->passageiros;
       }

       function Veiculosrodoviarios()
       {
           print 'Numero de rodas: ' . $this->nrodas . "<br>";
           print 'Passageiros: ' .  $this->npassageiros . "<br>";
       }

       function __construct($nrodas, $npassageiros){
        $this->rodas = $nrodas;
        $this->passageiros = $npassageiros;
    }
}


?>
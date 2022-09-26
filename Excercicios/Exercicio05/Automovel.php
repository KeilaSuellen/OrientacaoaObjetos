<?php

include_once 'Cambio.php';
include_once 'Manual.php';

Class Automovel extends Manual
{
    private Cambio $cambio;

    public function __construct($embreagem, $cambio)
    {
        parent:: __construct($embreagem);
        $this->cambio = $cambio;
    } 
    public function AumentarMarcha()
    {
        echo "Troca de Marcha";
    }
}

?>
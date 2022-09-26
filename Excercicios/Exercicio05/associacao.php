<?php

    include_once "Automovel.php";
    include_once "Cambio.php";
    include_once "Manual.php";
    
    $cambio = new Cambio(3);
    $automovel = new Automovel(true, $cambio);

    $automovel->AumentarMarcha();


?>
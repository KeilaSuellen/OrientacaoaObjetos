<?php
include 'Veiculorodoviario.php';
include 'caminhao.php';
include 'automovel.php';


    $caminhao = new Caminhao(1,30, "Toco");
    $automovel = new automovel(4,4,"gol");


    echo "{$caminhao->Mostrar()} <br>";
    echo "{$automovel->Mostrar()}";

?>
<?php

    class Biblioteca{
        const Nome = "GTK";
     }

     class Aplicacao extends Biblioteca{
        //delcaração das constantes

        const Ambiente = "Gnome Desktop";
        const Versao = "3.8";

        //Metódo constutor acesse as constantes interamente

        function __construct($Nome){
            echo parent::Nome . self::Ambiente . self::Versao . $Nome  . "<br>";
        }
     }

     //Acessa a constante externamente
     echo Biblioteca::Nome . Aplicacao::Ambiente . Aplicacao::Versao . "<br>";

     new Aplicacao('Dia');
     new Aplicacao('Gimp');
?>
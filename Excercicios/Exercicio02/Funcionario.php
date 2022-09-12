<?php

class Funcionario extends Pessoa
    {
        var $salario;
        var $cargo;


        function ObterSalario()
        {
            return $this->salario * 0.5;
        }

        function ImprimeDados()
        {
            parent:: ImprimeDados();
            print 'Salario: R$ ' . $this->salario . "<br>";
            print 'Cargo: ' .  $this->cargo . "<br>";
        }
    }

?>
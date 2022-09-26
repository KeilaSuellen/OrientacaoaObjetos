<?php

class Funcionario extends Pessoa
    {
        var $salario;
        var $cargo;

        function __construct($nome, $endereco, $idade, $salario, $cargo){
            parent:: __construct($nome, $endereco, $idade);
			$this->salario = $salario;
            $this->cargo = $cargo;
        }


        function ObterSalario()
        {
            return $this->salario;
        }

        function ImprimeDados()
        {
           
            print 'Salario: R$ ' . $this->salario . "<br>";
            print 'Cargo: ' .  $this->cargo . "<br>";
        }
    }

?>
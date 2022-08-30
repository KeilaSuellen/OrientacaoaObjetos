<?php
#carrega as classes
include 'Funcionario.php';
include 'Estagiario.php';


$pedrinho=new Estagiario ();

$pedrinho ->setSalario(248);

echo'O Salário do Pedrinho é R$: '.$pedrinho->getSalario()."<br>";

?>
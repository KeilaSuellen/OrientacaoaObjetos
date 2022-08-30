<?php
  #carrega a classe

include_once 'Funcionario.php';

$pedro = new Funcionario();
//atriibiu novo Salario
$pedro->setSalario(876);

echo 'Salario:R$' .$pedro ->getSalario();

?>
<?php
include 'Pessoa.php';
include 'Funcionario.php';


$Dados = new Funcionario();
$Dados ->nome = "Ricardo Silva";
$Dados ->endereco = "Avenida Rio Branco, 67";
$Dados ->idade = 22;
$Dados ->salario = 9000;
$Dados ->cargo = " Engenheiro de Software";

echo'Informações do funcionario<br>';
echo "{$Dados->ImprimeDados()}";

?>
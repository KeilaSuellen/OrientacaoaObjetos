<?php
include 'Pessoa.php';
include 'Funcionario.php';


$Dados = new Funcionario("Ricardo Silva","Avenida Rio Branco, 67", 22, 9000, "Engenheiro de Software");

echo'Informações do funcionario<br>';
echo "{$Dados->ImprimeDados()}";

?>
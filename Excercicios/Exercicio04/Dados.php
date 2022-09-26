<?php
include 'Conta_Comum.php';
include 'Conta_Especial.php';
include 'Conta_Poupanca.php';

$Dados = new Conta_Comum (5544,'10/04/2000', false,1, '87654',2.000);
/*$Dados->conta = 5544;
$Dados->abertura ='10/04/2000';
$Dados->encerramento = false;
$Dados->situacao = 1;
$Dados->senha = 87654;
$Dados->saldo = 2.000;*/

echo "$Dados";



/*$Dados = new conta_comum (5544,'10/04/2000', false,1, '87654',2.000);*/

?>
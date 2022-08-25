<?php 

 include_once 'conta.php';

 $valor = new Conta();

 
 $valor->NumAge = 001;
 $valor->NumConta = "6";
 $valor->Nome = "Rominho";
 $valor->Saldo = "R$5000";

 $valor->ImprimeConta();

?>
<?php
class Conta_Poupanca extends Conta_Comum{
private $dt_aniversario;

function __construct($nro_conta, $dt_abertura, $dt_encerramento, $situação = 1, $senha, $saldo, $limite_conta, $dt_aniversario)
{

    parent:: __construct($nro_conta, $dt_abertura, $dt_encerramento, $situação = 1, $senha, $saldo, $limite_conta);
    $this->aniversario = $dt_aniversario;

}

function renda_Conta ($saldo){

    $this->saldo += $this->saldo * 0.08;

}

}

?>
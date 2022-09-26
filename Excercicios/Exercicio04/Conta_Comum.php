<?php

class Conta_Comum{
protected $nro_conta; 
protected $dt_abertura;
protected $dt_encerramento;
protected $situacao =1;
protected $senha;
protected $saldo;


protected function __construct($nro_conta, $dt_abertura, $dt_encerramento, $situação = 1, $senha, $saldo)
{
    $this->conta = $nro_conta;
    $this->abertura = $dt_abertura;
    $this->encerramento = $dt_encerramento;
    $this->situacao = $situacao = 1;
    $this->senha = $senha;
    $this->saldo = $saldo;
}

public function abir_conta($nro_conta){

    $this->conta= $nro_conta;
    return true;

}
public function consultar_Conta ($nro_conta){

        $this->conta=$nro_conta;
    }

public function validar_Senha ($senha){
    
        if(is_numeric($senha)&&($senha > 0 ))
    $this->senha = $senha;

    return true;

    }
public function saldo_conta ($situacao){
    
        if(is_numeric($situacao)&&($situacao > 1 ))
    $this->situacao = $situacao;

    }
    public function extrato_conta ($saldo){
    
        if(is_numeric($saldo)&&($saldo > 0 ))
    $this->saldo = $saldo;

    }
    public function sacar_Valor ($sacar){
        if ($sacar > 0) {
            $this->saldo-=$sacar;
        }
      
    }
    public function depositar($sacar){
        if ($sacar > 0) {
            $this->saldo+=$sacar;
        }
    }
    
    public function encerrar_Conta ($dt_encerramento){

        $this->encerramento=$dt_encerramento;
    }

}

?>
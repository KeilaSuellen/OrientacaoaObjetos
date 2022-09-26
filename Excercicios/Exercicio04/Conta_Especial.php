<?php
class Conta_Especial extends Conta_Comum{
private $limite_conta;

function __construct($nro_conta, $dt_abertura, $dt_encerramento, $situação = 1, $senha, $saldo, $limite_conta)
{

    parent:: __construct($nro_conta, $dt_abertura, $dt_encerramento, $situação = 1, $senha, $saldo);
    $this->limite = $limite_conta;

}

public function abir_conta($nro_conta){

    $this->conta= $nro_conta;

}

function sacar_Valor($sacar){
    if ($this->saldo >= $sacar)
    {
        parent::sacar_Valor($sacar);
        }
        else{
            echo "<br>Saque não permitido ... <br>";
            return false;
        }
        return true;
    }
    function juros_conta($sacar)
		{
		   return $sacar*0.2;
    
            
            /*$juros = 0.08;
			
			if (($this->saldo + $this->limite) >= $sacar)
			{
				parent:: juros_conta($sacar);
                
				parent:: juros_conta($sacar * $juros);
			}*/
		
		}	
}

?>
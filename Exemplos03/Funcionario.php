<?php

class Funcionario{

private $Codigo;
public $Nome;
private $Nascimento;
protected $Salario;

    function setSalario($Salario){
        //verifica se é numerico e positivo
        if(is_numeric($Salario)&&($Salario > 0))
        {
            $this->salario = $Salario;
        }
    }

    /*método GetSalario
    * retorna o valor da propriedade $Salario
    */
    function getSalario(){
        return $this->salario;
    }

}
?>
<?php

class Conta{

    var $NumAge;
    var $NumConta;
    var $Nome;
    var $Saldo;

    function ImprimeConta()
    {
        print 'NumAge: ' . $this->NumAge . "<br>";
        print 'NumConta: ' .  $this->NumConta . "<br>";
        print 'Nome: ' . $this->Nome . "<br>";
        print 'Saldo:' .$this->Saldo . "<br>";
    }

}
    

?>

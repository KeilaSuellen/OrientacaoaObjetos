<?php

    class Pessoa
    {
        var $nome;
        var $endereco;
        var $idade;

      
    
    
    function ImprimeDados()
    {
        print 'Nome: ' . $this->nome . "<br>";
        print 'Endereço: ' .  $this->endereco . "<br>";
        print  'Idade:' .$this->idade . "<br>";
    }
}

?>
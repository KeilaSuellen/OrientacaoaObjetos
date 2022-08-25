<?php

    //Insere a classe
    include_once 'Produto.php';

    //Cria um objeto
    $valor = new Produto();

    //Atribuindo Valores
    $valor ->Codigo = 4011;

    $valor ->Descricao = "CD The Best of Eric Clapton";

    //Imprimindo os valores
    echo $valor->Codigo . " - " . $valor->Descricao;


?>
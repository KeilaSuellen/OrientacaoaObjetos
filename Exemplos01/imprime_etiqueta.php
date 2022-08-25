<?php
    // insere a classe
    include_once 'Produto.php';

    //Cria dois objetos
    $produto1 = new Produto();
    $produto2 = new Produto();

    //Atribuir valores
    $produto1->Codigo = 4001;
    $produto1->Descricao = "CD The Best of Eric Clapton";

    $produto2->Codigo = 4002;
    $produto2->Descricao = "CD - The Eagles Hotel Califonia";

    //Imprime informações de etiqueta
    $produto1->ImprimeEtiqueta();
    $produto2->ImprimeEtiqueta();
    
?>
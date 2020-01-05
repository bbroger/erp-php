<?php 

    require("/models/produto.php");
    
    $p = new Produto("teste", "teste", 123);

    // $p->setNome($_POST['nome']);
    // $p->setDescricao($_POST['descricao']);
    // $p->setValor($_POST['valor']);

    var_dump($_FILES['arquivo']);

    // echo $p-getNome() . "<br />";
    // echo $p-getDescricao() . "<br />";
    // echo $p-getValor() . "<br />";
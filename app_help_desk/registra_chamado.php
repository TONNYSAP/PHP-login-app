<?php

    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    
    session_start();

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $catagoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    $texto = $_SESSION['id'] . ' - ' . $_POST['titulo'] . ' - ' . $_POST['categoria'] . ' - ' . $_POST['descricao'] . PHP_EOL;
    echo $texto;

    echo '<br/>';
    echo $titulo;
    echo '<br/>';
    echo $catagoria;
    echo '<br/>';
    echo $descricao;

    //ou também
    echo '<br/>';
    $outra_forma = implode(' - ', $_POST);
    echo $outra_forma;

    //abrindo o arquivo
    $arquivo = fopen('arquivo.txt', 'a');
    //escrevendo o arquivo
    fwrite( $arquivo, $texto);
    //fechando o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');

?>
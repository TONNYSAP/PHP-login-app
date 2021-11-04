<?php

    session_start();
/*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //remover indeces do array de sessão
    //unset()

    unset($_SESSION['x']);  //para remover o índece apenas se ele existir

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    //destruir a variável de sessão
    //session_destroy()

    session_destroy();  //será destruída
    //forçar um redirecionamento

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
*/
    session_destroy();
    header('Location: index.php');
?>
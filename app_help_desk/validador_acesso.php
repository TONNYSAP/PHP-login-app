<?php
  session_start();

  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: index.php?login=erro2');
  }

  //header('Location: index.php?login=erro2');


  //$_SESSION['y'] = 1500;
?>
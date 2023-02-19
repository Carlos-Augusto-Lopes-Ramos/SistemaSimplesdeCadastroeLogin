<?php

    session_start();
    include_once('scripts/conexao.php');
    if((!isset($_SESSION['login']) == true) && (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }

?>
<?php

    session_start();

    if(isset($_POST['alterar']))
    {
        //Acess the System
        include_once('conexao.php');
        
        $id = $_SESSION['id'];
        $nome = $_POST['nome'];
        $username = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = "UPDATE contas set nome='$nome',username='$username', senha='$senha' where id='$id'";
        $result = $conexao->query($sql);
            unset($_SESSION['nome']);
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            $_SESSION['nome'] = $nome;
            $_SESSION['login'] = $username;
            $_SESSION['senha'] = $senha;
            header('Location: ../index.php');
    }
    if(isset($_POST['apagar']))
    {
        //Acess the System
        include_once('conexao.php');
        
        $id = $_SESSION['id'];
        $sql = "DELETE FROM contas WHERE id='$id'";

        $result = $conexao->query($sql);
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('Location: ../login.php');

    }
    if(isset($_POST['deslogar'])) {
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('Location: ../login.php');
    }

?>
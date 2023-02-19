<?php
    session_start();
    if(isset($_POST['logar']))
    {
        //Acess the System
        include_once('conexao.php');
        
        $username = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM contas WHERE username = '$username' and senha = '$senha'";

        $result = $conexao->query($sql);
        $query = "SELECT * FROM contas"; 

        $req = "SELECT id, nome FROM contas WHERE username = '$username' and senha = '$senha'";
        $con = $conexao->query($req) or die($conexao->error);
 
        if(mysqli_num_rows($result)<1)
        {
            echo mysqli_num_rows($result);
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('Location: ../login.php');
        }else{            
            echo mysqli_num_rows($result);
            if($dado = $con->fetch_array()) {
                $_SESSION['id'] = $dado['id'];
                $_SESSION['nome'] = $dado['nome'];
            }
            else{
                $_SESSION['id'] = 0;
                $_SESSION['nome'] = "ERROR";
            }
            $_SESSION['login'] = $username;
            $_SESSION['senha'] = $senha;
            header('Location: ../index.php');
        }
    }
    else
    {
        //Go to the login page
    header('Location: ../login.php');
    };
    if(isset($_POST['cadastrar']))
    {
        //Acess the System
        include_once('conexao.php');
        
        $nome = $_POST['nome'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = "INSERT INTO contas (nome, username, senha) VALUES ('$nome', '$login', '$senha');";
        $req = "SELECT username FROM contas WHERE username = '$login'";
        $con = $conexao->query($req) or die($conexao->error);
 
        if(mysqli_num_rows($con)<1)
        {
            $result = $conexao->query($sql);
            header('Location: ../login.php');
        }
        else {
            header('Location: ../error.php');
        }
    }

?>
<?php
    session_start();
    if((isset($_SESSION['login']) == true) && (isset($_SESSION['senha']) == true))
    {
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='scripts/main.js'></script>
</head>
<body>
    <div id="container">
        <form action="scripts/compLogCad.php" method="post" class="boxLC">
            <label>Nome completo:</label>
            <input type="text" name="nome" class="formularioCampos" required>
            <label>Login:</label>
            <input type="text" name="login" class="formularioCampos" required>
            <label>Senha:</label>
            <input type="password" name="senha" class="formularioCampos" required>
            <div class="btnBox">
                <input type="submit" name="cadastrar" value="Cadastrar" class="btn loc">
                <div class="btn loc" onclick="recad('login.php')">Logar</div>
            </div>
        </form>
    </div>
</body>
</html>
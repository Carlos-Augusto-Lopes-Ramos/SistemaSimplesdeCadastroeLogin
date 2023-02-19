<?php
    include_once('scripts/conexao.php');
    include_once('scripts/testeLogin.php');    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        tr, td , th{
            border: 1px solid aliceblue;
        }
        .acumulativo {
            font-size: 20px;
            height: 24px;
        }
        .auxiliar {
            font-size: 20px;
            width: 60%;
        }
    </style>
</head>
<body>
    <div id="container" style="flex-wrap: wrap;">
        <form action="scripts/compAltApa.php" method="post" class="boxLC auxiliar">
            <label>Nome completo:</label>
            <input type="text" name="nome" value="<?php echo $_SESSION['nome'];?>" class="formularioCampos acumulativo" required>
            <label>Login:</label>
            <input type="text" name="login" value="<?php echo $_SESSION['login'];?>" class="formularioCampos acumulativo" required>
            <label>Senha:</label>
            <input type="text" name="senha" value="<?php echo $_SESSION['senha'];?>" class="formularioCampos acumulativo" required>
            <div class="btnBox">
                <input type="submit" name="alterar" value="Alterar" class="btn loc">
                <input type="submit" name="apagar" value="Apagar" class="btn loc">
                <input type="submit" name="deslogar" value="Deslogar" class="btn loc">
            </div>
        </form>
        <div class="boxLC auxiliar">

        <table style="width: 100%; text-align: center;">
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>USERNAME</th>
                    <th>SENHA</th>
                </tr>
                <?php
                    include_once("scripts/listar.php")
                ?>
            </tbody>
        </table>
        </div>
    </div>
</body>
</html>
<?php

    include_once("conexao.php");

    $query = "SELECT * FROM contas"; 
    $con = $conexao->query($query) or die($conexao->error);

    while($dado = $con->fetch_array()) { 
        echo "<tr>"; 
        echo "<td>" . $dado['id'] . "</td>";
        echo "<td>" . $dado['nome'] . "</td>";
        echo "<td>" . $dado['username'] . "</td>";
        echo "<td>" . $dado['senha'] . "</td>";
        echo "</tr>";
    }
?>
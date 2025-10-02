<?php
include "conexao.php";
if (isset($_POST)){
    $usuario = $_POST["username"];
    $senha = $_POST["password"];
    $sql = "SELECT * FROM tb_conta WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        header('Location: ../faca_pedido.html');
    } else {
        echo "<html>
        <head>
        </head>
        <body onload=\"alert('Usuário ou senha inválidos!');window.location.href='../login.html';\">
        </body>
        </html>";
        
    }
}
<?php
include "conexao.php";
if (isset($_POST)){
    $numero = $_POST["usernumero"];
    $cvv = $_POST["cvv"];
    $data = $_POST["data"];

    $sql = "SELECT * FROM tb_pagamentos WHERE numero = '$numero'  AND cvv = '$cvv' AND data = '$data'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        header('Location: ../senha_pedido.php');
    } else {
        echo "<html>
        <head>
        </head>
        <body onload=\"alert('Usuário ou senha inválidos!');window.location.href='../teladepagamento.html';\">
        </body>
        </html>";
        
    }
}
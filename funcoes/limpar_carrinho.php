<?php
session_start();

// Limpar o carrinho de compras (remover a sessão)
if (isset($_SESSION['carrinho'])) {
    unset($_SESSION['carrinho']);
}

// Redirecionar para a página de fazer o pedido
header("Location: http://localhost/tccgrupo5/faca_pedido_teste.html");
exit();
?>
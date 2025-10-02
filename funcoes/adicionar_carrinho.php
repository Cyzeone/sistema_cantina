<?php
session_start();

if (isset($_POST)) {
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = array();
    }

  
    $user_id = 1; // Substitua pelo seu método de obtenção do ID do usuário

    // Verifique se já existe um código e se passaram 2 minutos desde a última geração
    if (!isset($_SESSION['codigo']) || (time() - $_SESSION['ultimo_gerado'] >= 30)) {
        // Gere um novo código aleatório de 4 dígitos
        $codigo = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        // Armazene o código e o tempo em que foi gerado na sessão
        $_SESSION['codigo'] = $codigo;
        $_SESSION['ultimo_gerado'] = time();
    }

    
    $produtos = json_decode($_POST['produtos']);
    foreach ($produtos as $p){
        if ($p != null){
            $dados_produto = array(
                'user_id' => $user_id,
                'nome_lanche' => $p->name,
                'quantidade' => $p->quantity,
                'preço' => 'R$ ' . number_format($p->price, 2, ',', '.'),
                'codigo' => $_SESSION['codigo']
            );
            array_push($_SESSION['carrinho'], $dados_produto);
        }
    }
    
    echo json_encode(array('msg' => 'sucesso!'));
    
}
?>

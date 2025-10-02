<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Finalizado</title>
  </head>
<body>
    <style>

body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    background: #eceaff;
    text-align: center;
    justify-content: center;
}

.container {
    max-width: 400px;
    margin: 100px auto;
    padding: 20px;
}

#paymentMessage {
    font-size: none;
    margin-top: 20px;
    font-weight: bold;

}

#paymentCode {
    font-size: 30px;
    color: orange;
    background-color: #dcdcdc;
    border-radius: 10px;
    padding: 0px 10px; /* Reduzido o preenchimento horizontal */
    max-width: 200px; /* Definido uma largura máxima */
    margin: 0 auto; /* Centraliza horizontalmente */
    
}

#paymentNotice {
    font-size: 24px;
    margin-top: 20px;
    font-weight: bold;
}

.logo-image {
    position: relative;
    width: 210px; 
    height: 180px;

}

.container {
    max-width: 400px;
    margin: 100px auto;
    padding: 20px;
    background-color: #F5F5F2;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    align-items:center;
    justify-content: center;
}

h2 {
    text-align: center;
    font-size: 22px;
}

input[type="text"],

input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    font-family: Arial, sans-serif;
    width: 100%;
    padding: 10px;
    background-color: #0f6fc5;
    color: #FFFFFf;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-size: 16px; 
}

input[type="submit"]:hover {
    color: black;
}

</style>
 
<div class="container">
        <img class="logo-image" src="icones/gaviao.png">

        <h2>PAGAMENTO CONCLUÍDO! SUA SENHA É:</h2>

        <div id="barra">
            <div class="container">
                <th>Código</th>
                <?php
                if (isset($_SESSION['carrinho']) && !empty($_SESSION['carrinho'])) {
                    // Mostra apenas o primeiro código da sessão
                    $produto = $_SESSION['carrinho'][0];
                    echo "
                    <tr>
                        <td style=\"white-space: nowrap;\">" . $produto['codigo'] . "</td>
                    </tr>";
                }
                ?>
            </div>
        </div>

        <h2>AGUARDE PRÓXIMO À CANTINA ATÉ QUE SEU PEDIDO SEJA PREPARADO!</h2>

        <input type="submit" value="VOLTAR PARA A TELA DE LANCHES" onclick="voltarParaPedido()">

    </div>

    <script>
        // Função para redirecionar para "Faça o pedido.html"
        function voltarParaPedido() {
        window.location.href = "http://localhost/tccgrupo5/faca_pedido.html";
        }

    </script>
</body>
</html>

    
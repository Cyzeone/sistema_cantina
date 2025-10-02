<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>
    <a href="limpar_carrinho.php">Esvaziar Carrinho</a>
    <table border="1">
        <thead>
            <tr>
                <td>Nome</td>
                <td>Qtd</td>
            </tr>
        </thead>
        <tbody>
            <?php
            session_start();
            if ($_SESSION['carrinho'] != null){
                foreach ($_SESSION['carrinho'] as $produto){
                    echo "<tr>
                            <td>".$produto['nome_lanche']."</td>
                            <td>" . $produto['quantidade'] . "</td>
                        </tr>";
                }
            }
            ?>
        </tbody>
    </table>
</body>
</html>

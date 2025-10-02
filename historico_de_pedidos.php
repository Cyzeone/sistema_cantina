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
    <title>Histórico de pedidos</title>
  </head>
<body>
    <style>

body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    background: #eceaff;
}

nav {
    max-width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #0f6fc5;
    padding: 60px;
    border-radius: 0 100px 100px 0;

}

.titulo {
    color: white;
    font-size: 45px;
    position: absolute;
    font-weight: bold;
    top: 35px;
    left: 30px;


}

ul { 
    list-style-type: none;
    margin: 0;
    padding: 0;
}

li {
    margin-right: 15px;
    display: inline;
}

h1 {
    text-decoration: none;
    color: white;
    font-weight: bold;
    font-size: 40px;
}

.menulogo { /*BOTAO MENULOGO ANTERIOR NAO FUNCIONA COMEÇO*/
    background-color: white;
    border-radius: 100%;
    width: 100px;
    height: 100px;
    display: none;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: scale 0.2 ease;
    position: absolute;
    right: 12px;
    top: 10px;
    
   
}

.menulogo:hover {
    scale: 1.05;
}

.menulogo:active{
    scale: 0.95;
} /*AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA FIM*/

.toggle_btn {
    color: white;
    font-size: 2.5rem;
    cursor: pointer;
    position: absolute;
    right: 44px;
    top: 40px;
    
}

.container {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    margin-top: 50px; /* Aumente o valor para descer a tabela mais para o centro */

}

table {
    border-collapse: collapse;
    width: 100%;
    max-width: 800px; /* Aumente o tamanho da tabela */
    border: 2px solid #FFA500; /* Bordas mais grossas */
    font-size: 24px; /* Aumente o tamanho da fonte */
    margin-top: 90px;
    margin-left: 120px;


}

th, td {
    border: 3px solid #FFA500; /* Bordas mais grossas */
    padding: 12px; /* Aumente o espaço interno das células */
    text-align: center;

}

th {
    background-color: #FFA500;
    color: white;

}

.example-row {
    font-weight: bold;
    left: 200px;

}   

.sub-menu-wrap{
    position: absolute;
    top: 142%;
    right: -120%;
    width: 320px;
    max-height: 0px;
    overflow: hidden;
    transition: max-height 0s;
    z-index: 2;
    

}
.sub-menu-wrap.open-menu{
    max-height: 400px;

}
.sub-menu{
    background: white;
    padding: 20px;
    margin: 10px;
    border-radius: 30px;
    border: 5px solid;
    border-color: #0f6fc5;

}

.sub-menu-link{
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #525252;
    margin: 12px 0;

}

.sub-menu-link p{
    width: 130%;
    font-size: 15px;

}

.sub-menu-link img{
    width: 40px;
    background: #e5e5e5;
    border-radius: 90%;
    padding: 9px;
    margin-right: 15px;
}

.sub-menu-link span{
    font-size: 20px;
    transition: transform 0.5s;
}

.sub-menu-link:hover span{
    transform: translate(5px);

}

.sub-menu-link:hover p{
    font-weight: 600;
}

/*RESPONSIVE NAVBAR*/

@media (max-width: 997px) {  /*BOTAO MENULOGO NAO FUNCIONA*/
    .menulogo {
        display: none;
    } 

    .toggle_btn {
        display: block;

    }

    .sub-menu-wrap {
        display: block;
    }
}

@media (max-width: 576px) {
    .sub-menu-wrap {
        right: 0px;
        top: 80px;
    }
}

@media (max-width: 576px) {
    .titulo {
        font-size: 30px;
        top: 42px;
        left: 10px;
    }
}

@media (max-width: 576px) {
    nav {
        max-width: 72%;
    }
}

@media (max-width: 576px) {
    .toggle_btn {
        right: 34px;
    }
}

@media (max-width: 576px) {
    table {
        font-size: 16px;
        width: 98%;
        margin-top: 100px;

    }
}

.action-buttons {
    display: flex;
    flex-direction: column; /* Mude para uma coluna */
    margin-top: 20px;
    max-width: 15%;
    position: absolute;
    right: 10%;
    bottom: 340px;
}



    .red-button {
        font-size: 20px;
        padding: 15px 30px;
        margin-top: 20px;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s;
        border: none;
        width: 100%; /* Preenche a largura disponível */
       
    }



    .red-button {
        background-color: red; /* Cor vermelha */
        color: white;
        margin-left: 10px; /* Adicionado um espaço entre os botões */
    }

    
    .red-button:hover {
        background-color: #cc0000; /* Cor mais escura ao passar o mouse */
    }

    </style>
    <div class="hero">
        <div class="titulo">
            <label>Histórico de Pedidos</label>
        </div>

        <nav>
            <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
            <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
        
            <a href="http://localhost/tccgrupo5/dados_pessoais.html" class="sub-menu-link">
          <img src="icones/conf.png">
          <p>Configurações da Conta</p>
          <span>>
          </span>
          </a>

          <a href="http://localhost/tccgrupo5/faca_pedido.html" class="sub-menu-link">
            <img src="icones/lanches.png">
            <p>Lanches</p>
            <span>>
            </span>
            </a>

                  <a href="http://localhost/tccgrupo5/termos.html" class="sub-menu-link">
                      <img src="icones/doc.png">
                      <p>Políticas de Privacidade</p>
                      <span>></span>
                  </a>


                  <a href="http://localhost/tccgrupo5/inicial.html" class="sub-menu-link">
              <img src="icones/exit.png">
              <p>Sair</p>
              <span>></span>
              </a>

            </div>
        </div>
       </nav>
</div>

<?php
date_default_timezone_set('America/Sao_Paulo');
// O resto do seu código continua aqui...
?>
<div class="combobox">
    <table border="1">
        <th>Código</th>
        <th>Pedido</th>
        <th>Quantidade</th>
        <th>Preço</th>
        <th>Data</th>
        <?php
        
        if (isset($_SESSION['carrinho'])) {
            if ($_SESSION['carrinho'] != null) {
                foreach ($_SESSION['carrinho'] as $produto) {
                    echo "
                    <tr>
                        <td style=\"white-space: nowrap;\">" . $produto['codigo'] . "</td>
                        <td style=\"white-space: nowrap;\">" . $produto['nome_lanche'] . "</td>
                        <td style=\"white-space: nowrap;\">" . $produto['quantidade'] . "</td>
                        <td style=\"white-space: nowrap;\">" . $produto['preço'] . "</td>
                        <td class=\"example-row\">" . date("d/m/Y") . "</td>
                    </tr>";
                }
            }
        }
        ?>
    </table>

<div class="action-buttons">
    <button class="red-button" onclick="cancelar()">Limpar tabela</button>
</div>
    <script>
        
        const toggleBtn = document.querySelector('.toggle_btn')
        const toggleBtnIcon = document.querySelector('.toggle_btn i')
        const subMenuWrap = document.querySelector('subMenu')
    
        toggleBtn.onclick = function () {
            subMenu.classList.toggle('open-menu')
            const isOpen = subMenu.classList.contains('open-menu')
    
            toggleBtnIcon.classList = isOpen
            ? 'fa-solid fa-xmark'
            : 'fa-solid fa-bars'
        }

      
        function cancelar() {
        // Chamar a página PHP que limpa o carrinho
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "limpar_carrinho.php", true);
        xhr.send();
        }
    </script>

</body>
</html>
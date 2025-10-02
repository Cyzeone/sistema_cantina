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
    <title>Finalizar o pedido</title>
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

.menulogo { 
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
} 

.toggle_btn {
    color: white;
    font-size: 2.5rem;
    cursor: pointer;
    position: absolute;
    right: 44px;
    top: 40px;
    
}

.sub-menu-wrap{
    position: absolute;
    top: 142%;
    right: -120%;
    width: 320px;
    max-height: 0px;
    overflow: hidden;
    transition: max-height 0s;
    

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

.container {
    display: flex;
    flex-direction: column; /* Altera para uma coluna em telas menores */
    align-items: center; /* Centraliza na horizontal em telas menores */
    margin-top: 10px;
}

.form {
    flex: 1;
    padding: 30px;
    max-width: 500px; /* Define uma largura máxima para o formulário */
        }

.input-group {
    margin-bottom: 30px;
    display: flex;
    flex-direction: column;
}

.input-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px; /* Espaçamento inferior entre rótulo e entrada */
}

.input-group input {
    width: 100%; /* Preenche a largura do pai */
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 10px;
    background-color: #f5f5f5;
}

.bottom-button {
    font-weight: bold;
    font-size: 30px;
    background-color: orange;
    color: white;
    padding: 10px 50px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    position: absolute;
    bottom: 100px; /* Ajuste para subir um pouco */
    left: 50%;
    transform: translateX(-50%);
}


@media (max-width: 997px) {
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

@media screen and (max-width: 768px) {
  .form {
    padding: 20px;
  }

  .input-group label {
    font-size: 18px;
  }

  .input-group input {
    font-size: 18px;
  }
        
  .bottom-button {
    font-size: 24px;
  }
}

.icon-buttons {
            display: flex;
            justify-content: flex-start;
            /* Mova os botões para a esquerda */
            align-items: center;
            background-color: white;
            padding: 5px;
            border-radius: none;
        }

        .icon-button {
            background-color: #f5f5f5;
            border-radius: 90px;
            /* Tornar os botões quadrados */
            width: 110px;
            height: 110px;
            margin-right: 90px;
            display: flex;
            justify-content: top;
            align-items: top;
        }

        .icon-button img {
            width:100%;
            height: 100%;
            border-radius: 50%;
        }


        /* Rest of the styles remain the same */

        /* Add styles for the combobox */
        .combobox {

            padding: 10px;
            width: 300px;
            border-radius: 15px;
            margin-top: 45px;
            background-color: none;
            color: black;
            margin-bottom: 20px; /* Aumentei o espaço abaixo da combobox */
            
        }

        .combobox h2 {
            margin: 0px;
            padding: 0px;
            font-size: 25px;
            font-weight: bold;
            border-radius: 20px;
        }
        
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 900px;
            border: 2px solid 	#0000FF;
            margin-top: 10px;
            font-size: 25px;
           border-radius: 20px;
        }

        .combobox select {
            width: 100%;
            margin: 10px 0;
            
        }

        th {
            background-color: 	#0000FF;
            color: white;
            
        }

        th,
        td {
            border: 1px solid;
            padding: 12px;
            text-align: center;
            padding: 10px 40px;
            border-radius: 0px;
        }

        .combobox hr {
            border: 1px solid blue;

        }
        /* Add styles for the action buttons */
        
.action-buttons {
    display: flex;
    flex-direction: column; /* Mude para uma coluna */
    margin-top: 20px;
    max-width: 15%;
    position: absolute;
    right: 10%;
    bottom: 340px;
}

.action-buttons .green-button {
    margin-left: auto;
    margin-right: 30%; /* Ajuste o valor conforme necessário */
}

    .tabela-laranja {
    border-collapse: collapse;
    width: 100%;
    max-width: 900px;
    border: 2px solid #FFA500; /* Cor laranja - ajuste conforme necessário */
    margin-top: 10px;
    font-size: 25px;
    border-radius: 20px;
    margin-right: 20px; /* Aumentei o espaço à direita da tabela */
}

.green-button,
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

    .green-button {
        background-color: #28a745; /* Cor verde */
        color: white;
    }

    .red-button {
        background-color: red; /* Cor vermelha */
        color: white;
        margin-left: 10px; /* Adicionado um espaço entre os botões */
    }

    .green-button:hover{
        background-color: #218838; /* Cor mais escura ao passar o mouse */
    }
    .red-button:hover {
        background-color: #cc0000; /* Cor mais escura ao passar o mouse */
    }

.tabela-laranja th {
    background-color: #FFA500; /* Cor de fundo do cabeçalho laranja */
    color: white;
}

.tabela-laranja th,
.tabela-laranja td {
    border: 1px solid;
    padding: 12px;
    text-align: center;
    padding: 10px 40px;
    border-radius: 0px;
}


  </style>

<div class="hero">
      <div class="titulo">
        <label>Finalizar Pedido</label>
     </div>

     <nav>
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
    </div>
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
    </script>

    <div class="icon-buttons">
        <div class="icon-button">
            <img src="icones/hamburguer.png" alt="Hamburguer Icon">
        </div>
        <div class="icon-button">
            <img src="icones/suco2.png" alt="Juice Icon">
        </div>
        <div class="icon-button">
            <img src="icones/doce.png" alt="Candy Icon">
        </div>
    </div>
    <?php
date_default_timezone_set('America/Sao_Paulo');
// O resto do seu código continua aqui...
?>
    <div class="combobox">
    <table border="1" class="tabela-laranja">
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
                        <td class=\"example-row\" style=\"white-space: nowrap;\">" . $produto['nome_lanche'] . "</td>
                        <td style=\"white-space: nowrap;\">" . $produto['quantidade'] . "</td>
                        <td style=\"white-space: nowrap;\">" . $produto['preço'] . "</td>
                        <td class=\"example-row\">" . date("d/m/Y") . "</td>
                    </tr>";
                }
            }
        }
        ?>
    </table>
</div>

<div class="action-buttons">
    <button class="green-button" onclick="prosseguir()">PROSSEGUIR</button>
    <button class="red-button" onclick="cancelar()">CANCELAR</button>
</div>

<script>

        // Função para redirecionar para "Finalizar o pedido.html"
    function prosseguir() {
        window.location.href = "http://localhost/tccgrupo5/pagamento.html";
    }


    // Função para redirecionar para "Faça o pedido.html" e limpar carrinho
    function cancelar() {
        // Chamar a página PHP que limpa o carrinho
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "limpar_carrinho.php", true);
        xhr.send();

        // Redirecionar para a página Faça o pedido.html
        // Este redirecionamento será efetuado apenas se o PHP (limpar_carrinho.php) for executado
        window.location.href = "http://localhost/tccgrupo5/faca_pedido_teste.html";
    }
    
</script>


</body>
</html>

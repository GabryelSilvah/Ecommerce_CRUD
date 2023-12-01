<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="css_global/produtos.css">
    <link rel="stylesheet" href="css_global/nav_and_footer.css">
</head>

<body>

<header>
        <nav class="menu">
            <ul class="icones">
                <li><a href="index.php">Home</a></li>
                <li><a href="descricao_produto.php">Produtos</a></li>
                <li><a href="produtos.html">Serviços</a></li>
                <li><a href="produtos.html">Atendimento</a></li>
                <li><a href="produtos.html">Carrinho</a></li>
            </ul>
        </nav>
    </header>

    <!--Processamento dos produtos pelo servidor-->

    <?php


    include('conexao.php');

    $selec_produtos = mysqli_query($mysqli, "SELECT* FROM cadastro_produtos");

    //loop para puxar produtos no banco de dados
    ?>

    <section class="container_produto">
        <?php
        while ($produto = mysqli_fetch_assoc($selec_produtos)) {

        ?>
            <a href="descricao_produto.php?x=<?= $produto['titulo_Produto'] ?>">
                <div class="produto">

                    <img class="img_produto" src="./imagem/<?php echo $produto['img1'] ?>">


                    <?php
                    echo "<h3>" . $produto['titulo_Produto'] . "</h3>";

                    ?>
                </div>
            </a>
        <?php
        }
        ?>

    </section>

    <footer>
        <section class="container_footer">
            <h3>Loja virtual</h3>
            <div>

                <a class="redes-sociais" href="">
                    <img class="icones-footer" src="icone/instagram.png" alt="">
                    <p>Instagram</p>
                    <p>Telefone:</p>
                </a>
            </div>

            <div>

            </div>
        </section>
    </footer>


</body>

</html>
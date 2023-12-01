<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce</title>
    <link rel="stylesheet" href="css_global/style.css">
    <link rel="stylesheet" href="css_global/nav_and_footer.css">
</head>


<body>

    <header>
        <nav class="menu">
            <ul class="icones">
                <li><a href="index.php">Home</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="produtos.html">Serviços</a></li>
                <li><a href="produtos.html">Atendimento</a></li>
                <li><a href="produtos.html">Carrinho</a></li>
            </ul>
        </nav>
    </header>


    <section class="container_img_principal">
        <img class="img_principal" src="imagem/img_painel.jpg" alt="imagem de roupas em loja">
    </section>

    <section class="oferta">
        <p id="paragrafo1">Destaques</p>

        <div class="container_produtos">
            <?php
            include('conexao.php');
            //consulta na tabela destaque do banco de dados
            $consuta1 = mysqli_query($mysqli, "SELECT*FROM destaque");


            while ($associarCon1 = mysqli_fetch_assoc($consuta1)) {
                $arraysProdutos[] = $associarCon1['produtosDestaque'];
            }


            $rows = mysqli_num_rows($consuta1);
            $associarCon1 = mysqli_fetch_assoc($consuta1);


            foreach ($arraysProdutos as $tt => $valor) {

                //consuta para associar nome salvo no destaques ao da tabela de cadastro_produtos
                $consuta = mysqli_query($mysqli, "SELECT*FROM cadastro_produtos WHERE titulo_Produto='$valor'");
                $associacao = mysqli_fetch_assoc($consuta);
            ?>



                <!--Produto-->
                <a href="descricao_produto.php?x=<?= $associacao['titulo_Produto'] ?>">
                    <div class="produto">
                        <img class="img_produto" src="imagem/<?php echo $associacao['img1']  ?>" alt="">

                        <p id="paragrafo2"><?php echo $associacao['titulo_Produto']  ?></p>
                    </div>
                </a>

            <?php
            }
            ?>

        </div>



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
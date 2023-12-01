<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css_global/descricao_produto.css">
    <link rel="stylesheet" href="css_global/nav_and_footer.css">
    <script src="js/miniaturas.js" defer></script>
    <script src="js/buttom_quant.js" defer></script>

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
    <main>
        <!--Processamento dos produtos pelo servidor-->
        <?php

        include('conexao.php');
    
        $produtoHome = $_GET['x'];

        //Resgata a imagem no banco de dados
        $select = mysqli_query($mysqli, "SELECT* 
        FROM cadastro_produtos WHERE titulo_Produto = '$produtoHome'");

        //Exibe informações do produtos no site
        $produto = mysqli_fetch_assoc($select);

        ?>
        <section class="infor_produto">
            <div class="column_1">
                <div class="container_img">
                    <img id="img_principal" class="img_produto" src="imagem/<?php echo $produto['img1'] ?>">
                </div>
                <div class="img_miniaturas">
                    <button type="button" class="btn_l_mini" onclick="esquerda()">&lt;</button>
                    <img src="imagem/<?php echo $produto['img1'] ?>" id="img1">
                    <img src="imagem/<?php echo $produto['img2'] ?>" id="img2">
                    <img src="imagem/<?php echo $produto['img3'] ?>" id="img3">
                    <button type="button" class="btn_d_mini" onclick="direita()">&gt;</button>
                </div>
            </div>

            <div class='column_2'>
                <?php
                echo "<h3 class='titulo'>" . $produto['titulo_Produto'] . "</h3>";
                echo "<p class='descricao'> Descrição: " . $produto['descricao_Produto'] . "<p>";
                ?>
            </div>
            <div class="column_3">
                <form action="carrinho.php" class="formulario">
                    <div>
                        <label for="">Tamanho</label>
                        <select name="" id="">
                            <option value="">P</option>
                            <option value="">M</option>
                            <option value="">G</option>
                            <option value="">GG</option>
                        </select>
                    </div>


                    <div class="quant">
                        <label for="">Quantidade</label>
                        <button type="button" id="btn_l" onclick="diminuir()">&lt</button>
                        <p id="par_quant">1</p>
                        <button type="button" id="btn_d" onclick="aumentar()">&gt</button>
                    </div>

                    <button type="submit" class="btn-carrinho">Adicionar ao carrinho</button>

                </form>
            </div>


        </section>
        
    </main>
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
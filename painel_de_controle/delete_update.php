<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar ou Atualizar</title>
    <link rel="stylesheet" href="css_local_painel/tabela_destaque.css">
    <link rel="stylesheet" href="css_local_painel/local_nav_painel.css">
    <link rel="stylesheet" href="css_local_painel/delete_update.css">
</head>

<body>

    <header>
        <nav class="menu">
            <ul>
                <li>
                    <a href="painel_de_controle.html">Painel de controle</a>
                </li>
            </ul>

            <!--formulário de atualização-->
            <div class="div_form">
                <form action="serven_delete_update.php" method="post" class="form_updata" enctype="multipart/form-data">
                    <div class="container_form">
                        <div id="container_nome_descicao">
                            <label class="label" for="">Nome do Produto que será modificado</label>
                            <input required type="text" name="nome_prod" class="input_form">

                            <h3>Insira as novas informações:</h3>
                            <label class="label">Nome do Produto</label>
                            <input type="text" name="new_nome_prod" class="input_form">

                            <label class="label" for="">Dscrição</label>
                            <textarea class="input_area" name="decricao" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div id="container_img">
                            <label class="label" for="">Imagem 1</label>
                            <input type="file" name="img1">

                            <label class="label" for="">Imagem 2</label>
                            <input type="file" name="img2">

                            <label class="label" for="">Imagem 3</label>
                            <input type="file" name="img3">
                        </div>

                    </div>
                    <button type="submit" class="btn">Atualizar</button>
                </form>

                <form action="delete.php" method="post" class="form_delete">
                    <label for="">Insira o nome do produto que será deletado:</label>
                    <input type="text" name="input_delete" required class="input_form">
                    <button type="submit" class="btn">Deletar</button>
                </form>
            </div>
        </nav>
    </header>

    <?php
    include('../conexao.php');
    ?>




    <table class="tabela">


        <tr>
            <th>Nome do Produto</th>
            <th>Descrição</th>
            <th>Imagem 1</th>
            <th>Imagem 2</th>
            <th>Imagem 3</th>
        </tr>

        <?php
        $consulta = mysqli_query($mysqli, "SELECT*FROM cadastro_produtos;");

        while ($produtos = mysqli_fetch_assoc($consulta)) {

        ?>
            <tr>
                <td><?php echo $produtos['titulo_Produto'] ?></td>
                <td><?php echo $produtos['descricao_Produto'] ?></td>
                <td> <img style='height:50px;' src="../imagem/<?php echo $produtos['img1'] ?>"></td>
                <td> <img style='height:50px;' src="../imagem/<?php echo $produtos['img2'] ?>"></td>
                <td> <img style='height:50px;' src="../imagem/<?php echo $produtos['img3'] ?>"></td>
            </tr>
        <?php
        }
        ?>
    </table>



</body>

</html>
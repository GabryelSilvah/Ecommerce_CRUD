<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destaques</title>
    <link rel="stylesheet" href="css_local_painel/local_nav_painel.css">
    <link rel="stylesheet" href="css_local_painel/tabela_destaque.css">
</head>

<body>

    <header>
        <nav class="menu">
            <ul>
                <li>
                    <a href="painel_de_controle.html">Painel de controle</a>
                </li>
            </ul>
        </nav>
    </header>

    <!--Cadastro de produtos-->
    <main>
        <!--Tabela de escolhas para destaque-->
        <form action="serv_destaque.php" method="post" class="form">
            <table class="tabela">

                <tr>
                    <th>Produto</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Confirmar</th>
                </tr>



                <?php
                include("../conexao.php");

                $produtos_cadastrado = mysqli_query($mysqli, "SELECT*FROM cadastro_produtos");

                while ($tabela = mysqli_fetch_assoc($produtos_cadastrado)) {
                    echo "<tr><td>" . $tabela['titulo_Produto'] . "</td>";
                    echo "<td>" . $tabela['descricao_Produto'] . "</td>";
                    $img = "<img style='height:50px;' src='../imagem/$tabela[img1]'>";
                    echo "<td>" . $img . "</td>";
                    echo "<td>" . "<label for='box_dest'><input type='checkbox' name='box_dest[]' value='$tabela[titulo_Produto]'>" . " </label></td></tr>"
                ?>

                <?php
                }

                ?>


                <button type="submit">Atualizar</button>

            </table>
        </form>
    </main>









</body>

</html>
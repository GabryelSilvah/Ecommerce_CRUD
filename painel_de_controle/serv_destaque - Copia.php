<?php
include('../conexao.php');
$check = $_POST['box_dest'];

foreach ($check as $tt => $valor) {
    //consulta na tabela destaque do banco de dados
    $consuta1 = mysqli_query($mysqli, "SELECT*FROM destaque WHERE produtosDestaque ='$check[$tt]'");
    $associarCon1 = mysqli_fetch_assoc($consuta1);
    $rows = mysqli_num_rows($consuta1);

    //validação de nome já exitente
    if ($rows == 0) {
        $insert = mysqli_query($mysqli, "INSERT INTO destaque (produtosDestaque)value('$check[$tt]') ");
    } else {
        echo "<p>" . "Já existe" . "<p>";
    }

    //consuta para associar nome salvo no destaques ao da tabela de cadastro_produtos
    $consuta = mysqli_query($mysqli, "SELECT*FROM cadastro_produtos WHERE titulo_Produto='$associarCon1[produtosDestaque]'");
    $associacao = mysqli_fetch_assoc($consuta);
}

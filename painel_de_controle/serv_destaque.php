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
        
    }

}

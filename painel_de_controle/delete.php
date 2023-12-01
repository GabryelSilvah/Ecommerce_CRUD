<?php
//incluindo conexão com banco de dados MySql
include('../conexao.php');
$produtoDelete = $_POST['input_delete'];

$consulta2 = mysqli_query($mysqli,"SELECT*FROM cadastro_produtos WHERE titulo_Produto='$produtoDelete'");
$rows = mysqli_num_rows($consulta2);
$produtos = mysqli_fetch_assoc($consulta2);
if($rows > 0){

$delete = mysqli_query($mysqli, "DELETE FROM cadastro_produtos WHERE titulo_Produto='$produtoDelete'");

}else{
    echo"<p>"."Esse produto não existe na lista"."</p>";
}

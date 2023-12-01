<?php
//incluindo conexão com banco de dados MySql
include('../conexao.php');

//Recebemdo dados preenchidos no formulário
$nome_produto = $_POST['nome_prod'];
$novo_nome_produto = $_POST['new_nome_prod'];
$descricao = $_POST['decricao'];
$img1 = $_FILES['img1'];
$img2 = $_FILES['img2'];
$img3 = $_FILES['img3'];



//Consultando tabela de dados no MySql
$consulta = mysqli_query($mysqli,"SELECT*FROM cadastro_produtos WHERE titulo_Produto='$nome_produto'");
$produtos = mysqli_fetch_assoc($consulta);


//Se campo do input estiver vazio os dados já cadastrados não seram modificados
if(empty($novo_nome_produto)){
    $novo_nome_produto = $produtos['titulo_Produto'];
    
}

if(empty($descricao)){
    $descricao = $produtos['descricao_Produto'];
   
}

if(empty($img1['name'])){
    $img1['name'] = $produtos['img1'];
    print_r($img1);
    
}

if(empty($img2['name'])){
    $img2['name'] = $produtos['img2'];
 
}
if(empty($img3['name'])){
    $img3['name'] = $produtos['img3'];
   
}


//Fazer o update dos novos dados
$update = mysqli_query($mysqli,"UPDATE ecommerce . cadastro_produtos SET
titulo_Produto = '$novo_nome_produto', descricao_Produto='$descricao',
img1='$img1[name]',img2='$img2[name]',img3='$img3[name]' WHERE titulo_Produto='$nome_produto'");


//atualizar página
header('location:delete_update.php');
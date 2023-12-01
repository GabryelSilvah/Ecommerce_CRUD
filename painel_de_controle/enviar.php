<?php



include('../conexao.php');

//Recebe as informações do front-end

$img1 = $_FILES['file'];
$img2 = $_FILES['file2'];
$img3 = $_FILES['file3'];
$quant = $_POST['quant'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];

//verificar se já existe uma imagem ou titulo com o mesmo nome 
$consulta = mysqli_query($mysqli, "SELECT* FROM cadastro_produtos 
    WHERE titulo_Produto = '$titulo' AND  img1='$img1[name]'");

$rows = mysqli_num_rows($consulta);

if (!empty($img1) && !empty($titulo) && !empty($descricao)  && !empty($quant )) {

    if ($rows == 1) {
        echo "Imagem ou titulo já existem no banco de dados";
    } else {


        //Insere as informações no banco de dados
        $insert = mysqli_query($mysqli, "INSERT INTO  cadastro_produtos(titulo_Produto,descricao_Produto,img1,img2,img3,quantEstoque) 
    VALUE('$titulo','$descricao','$img1[name]','$img2[name]','$img3[name]',$quant)");


        if ($insert) {
            echo "CADASTRADO COM SUCESSO!";
        }

        //adicionar a imagem na pasta do projeto
        move_uploaded_file($img1['tmp_name'], '../imagem/' . $img1['name']);
        move_uploaded_file($img2['tmp_name'], '../imagem/' . $img2['name']);
        move_uploaded_file($img3['tmp_name'], '../imagem/' . $img3['name']);
    }
} else {
    echo "Preencha todos os campos";
}

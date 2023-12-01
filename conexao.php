<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bancoDados = "ecommerce";
 


$mysqli = mysqli_connect($servidor,$usuario,$senha,$bancoDados) or
    die("Conexão encerrada");

mysqli_set_charset($mysqli, "utf8");



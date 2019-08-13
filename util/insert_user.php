<?php
include_once './conectaBD.php';
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

$queryVerificaUser = "INSERT INTO `usuario`( `nome`, `senha`, `nivel`) VALUES ('$nome','$senha','$nivel')";
$conn = conectar();
$resultado = mysqli_query($conn, $queryVerificaUser);


if ($resultado =1){
    
    echo 'usuario cadastrado com sucesso!!';
    
} else {
    echo 'deu merda';    
};
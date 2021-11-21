<?php
session_start();
include_once("conexao.php");


$nome=$_POST['Nome'];
$descricao=$_POST['Descricao'];
$cep=$_POST['cep'];
$celular=$_POST['telefone'];
$categoria=$_POST['categoria'];
$preco=$_POST['dinheiro'];


$nome = mysqli_real_escape_string($conexao, $nome);
$descricao = mysqli_real_escape_string($conexao, $descricao);
$cep = mysqli_real_escape_string($conexao, $cep);
$celular = mysqli_real_escape_string($conexao, $celular);
$descricao = mysqli_real_escape_string($conexao, $descricao);
$categoria = mysqli_real_escape_string($conexao, $categoria);
$preco = mysqli_real_escape_string($conexao, $preco);
$email = $_SESSION['Email'];

if(empty($nome) || empty($cep) || empty($celular) || empty($categoria)  || empty($preco)  ){
    header('Location: ../publicarS.php');
    mysqli_close($conexao);
    exit();
}
else{
    $SQL = "INSERT INTO SERVICO VALUES ('','$nome','$descricao','$cep','$celular','$preco','1.0','$email','$categoria')";
    $salvar = mysqli_query($conexao,$SQL);

    $linhas = mysqli_affected_rows($conexao);
   
    header('Location: ../Serviços.php');
    mysqli_close($conexao);
}

?>
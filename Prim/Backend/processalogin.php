<?php

session_start();
include_once("conexao.php");

$email = $_POST['Email'];
$senha = $_POST['Senha'];

if(empty($email) || empty($senha)){
    header('Location: ../login.php');
    mysqli_close($conexao);
    exit();
}

$email = mysqli_real_escape_string($conexao, $email);
$senha = mysqli_real_escape_string($conexao, $senha);

$_SESSION['Email'] = $email;

$SQL = "SELECT EMAIL_USER,SENHA_USER FROM USUARIO WHERE EMAIL_USER = '$email' AND SENHA_USER = '$senha'";
$consulta = mysqli_query($conexao,$SQL);
$registros = mysqli_num_rows($consulta);

if($registros == 1){
    $SQL2 = "SELECT NOME_USER FROM USUARIO WHERE EMAIL_USER = '$email' AND SENHA_USER = '$senha'";
    $consulta = mysqli_query($conexao,$SQL2);
    $exibeRegistros = mysqli_fetch_array($consulta);
    $_SESSION['usuario'] = $exibeRegistros[0];    
    header('Location: ../Prim.php');
}
else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../login.php');
}

mysqli_close($conexao);

exit();

?>

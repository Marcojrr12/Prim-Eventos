
<?php
session_start();
include_once("conexao.php");

$nome = $_POST['Nome'];
$Descricao = $_POST['Descricao'];
$Celular = $_POST['telefone'];
$CEP = $_POST['cep'];
$Categorias = $_POST['Categorias'];
$Data = $_POST['Data'];
$Hora = $_POST['Hora'];
$Publico = $_POST['Publico'];
$Preco = $_POST['dinheiro'];

$nome = mysqli_real_escape_string($conexao, $nome);
$Descricao = mysqli_real_escape_string($conexao, $Descricao);
$Celular = mysqli_real_escape_string($conexao, $Celular);
$CEP = mysqli_real_escape_string($conexao, $CEP);
$Categorias = mysqli_real_escape_string($conexao, $Categorias);
$Data = mysqli_real_escape_string($conexao, $Data);
$Hora = mysqli_real_escape_string($conexao, $Hora);
$Publico = mysqli_real_escape_string($conexao, $Publico);
$Preco = mysqli_real_escape_string($conexao, $Preco);
$email = $_SESSION['Email'];

if (empty($nome) || empty($Celular) || empty($CEP) || empty($Categorias) || empty($Data) || empty($Hora) || empty($Publico) || empty($Preco)){
    header('Location: ../publicarE.php');
    mysqli_close($conexao);
    exit();
}
else{
    $SQL = "INSERT INTO EVENTO VALUES ('','$nome','$Descricao','$CEP','$Celular','$Data','$Hora','$Preco','1.0','$Publico','0','$email','$Categorias')";
    $salvar = mysqli_query($conexao,$SQL);

    $linhas = mysqli_affected_rows($conexao);
    header('Location: ../Eventos.php');
    mysqli_close($conexao);
}


?>
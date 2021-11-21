<?php 
include("conexao.php");

$ID = $_POST['ID'];
$SQL = "DELETE FROM SERVICO WHERE ID_SERVICO = '$ID'";

$consulta = mysqli_query($conexao,$SQL);

mysqli_close($conexao);
header('Location: ../Meus Serviços.php');
exit();
?>
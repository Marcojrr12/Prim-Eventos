<?php 
include('verificalogin.php');
include('conexao.php');
$email = $_SESSION['Email'];

$titulo = $_POST['titulo'];
$ID = $_POST['ID'];
$vendido = $_POST['vendido'];

$SQL = "SELECT ING_VENDIDOS_EVENTO FROM EVENTO WHERE ID_EVENTO LIKE '$ID'";
$consulta = mysqli_query($conexao,$SQL);
$result = mysqli_fetch_array($consulta);

$totalVendas = $result[0]+$vendido;

$SQL = "UPDATE `EVENTO` SET ING_VENDIDOS_EVENTO = '$totalVendas' WHERE ID_EVENTO = $ID";
$consulta = mysqli_query($conexao,$SQL);

$SQL = "INSERT INTO INGRESSO VALUES ('','$ID','$titulo','$vendido','$email')";
$consulta = mysqli_query($conexao,$SQL);

mysqli_close($conexao);
header('Location: ../Meus Ingressos.php');
exit();
?>
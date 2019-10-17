<?php 

session_start();
 
require_once "conexion.php";

$id = $_SESSION['idUser'];
$fechaentrada = $_SESSION['fechaentrada'];
$horaentrada = $_SESSION['horaentrada'];
$fecha = date("Y-m-d");
$hora = date("H:i:s");

$sql = "UPDATE registro set fechasalida='$fecha', horasalida = '$hora' WHERE iduser = $id and fechaentrada = '$fechaentrada' and horaentrada = '$horaentrada' ";
//header('location: index2.php?mensaje='.$sql);
$alert = $sql;
$query = $conexion->prepare($sql);
$query->execute();
mysqli_close($conexion);

session_destroy();

header('location: index.php');
//header('location: index2.php?mensaje='.$sql);

?>


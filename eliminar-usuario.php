<?php
$usuario = $_POST["user_slc"];
include("conexion.php");
$consulta="DELETE FROM usuarios WHERE id_usuario='$usuario'";

$ejecutar_consulta = $conexion->query($consulta);

if($ejecutar_consulta)
	$mensaje = "El usuario con el id <b>$usuario</b> ha sido eliminado :(";
else
	$mensaje = "No se pudo eliminar el usuario con el id <b>$usuario</b> :/";

$conexion->close();
header("Location: ../index.php?op=baja&mensaje=$mensaje");
?>
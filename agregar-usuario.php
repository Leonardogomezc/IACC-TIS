<?php
//Asigno a variables de php los valores que vienen del formulario
$user = $_POST["user_txt"];
$nombre = $_POST["nombre_txt"];
$apellido = $_POST["apellido_txt"];
$nacimiento = $_POST["nacimiento_txt"];
$password = $_POST["pass_txt"];
$rol = $_POST["rol_slc"];


//verificamos que no exista previamente el id del usuario en la BD
include("conexion.php");
$consulta = "SELECT * FROM usuarios WHERE id_usuario='$user'";
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

//Si $num_regs es igual a 0, insertamos los datos en la tabla, sino mandamos un mensaje que diga que el usuario existe
if($num_regs == 0)
{
	

	$consulta = "INSERT INTO usuarios (id_usuario,nombre_usuario,apellido_usuario,fechanac_usuario,pass_usuario,rol_usuario) VALUES ('$user','$nombre','$apellido','$nacimiento','$password','$rol')";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

	if($ejecutar_consulta)
		$mensaje = "Se ha dado de alta al contacto con el usuario <b>$user</b>";
	else
		$mensaje = $consulta;//"No se pudo dar de alta al contacto con el usuario <b>$user</b>";
}
else
{
	$mensaje = "No se pudo dar  de alta al contacto con el usuario <b>$user</b> por que ya existe :/";
}

$conexion->close();
header("Location: ../index2.php?op=alta&mensaje=$mensaje");
?>
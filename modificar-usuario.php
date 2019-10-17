<?php 
//Asigno a variables php los valores que vienen del formulario
//Como el campo del email esta deshabilitado en el form php no lo reconoce por eso tengo que guardar su valor en un campo oculto
$user = $_POST["user_hdn"];
$nombre = $_POST["nombre_txt"];
$apellido = $_POST["apellido_txt"];
$nacimiento = $_POST["nacimiento_txt"];
$password = $_POST["pass_txt"];


include("conexion.php");
$consulta = "SELECT * FROM usuarios WHERE id_usuario='$user'";
echo $consulta;
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

if($num_regs==1)
{
	//Si la foto viene vacia asignamos el valor del boton oculto de la foto que tiene el valor anterior a la busqueda, sino subo la nueva foto y reemplazo el valor
	

	//actualizo los datos a la bd
	$consulta = "UPDATE usuarios SET nombre_usuario='$nombre', apellido_usuario='$apellido', fechanac_usuario='$nacimiento', pass_usuario='$password' WHERE id_usuario='$user'";
	$ejecutar_consulta = $conexion->query(utf8_encode($consulta));

	if(ejecutar_consulta)
	{
		$mensaje="Se han hecho los cambios en los datos del usuario con el id <b>$user</b> :)";
	}
	else
	{
		$mensaje="No se pudieron hacer los cambios en los datos del usuario con el id <b>$user</b> :(";
	}
}
else
{
	$mensaje="No se pudieron hacer los cambios en los datos del usuario con el id <b>$user</b> por que no existe o esta duplicado :/";
}
$conexion->close();
header("Location: ../index.php?op=cambios&mensaje=$mensaje");
?>
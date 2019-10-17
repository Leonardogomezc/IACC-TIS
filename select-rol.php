
<?php
//Incluyo el archivo de la conexión a la BD
include("conexion.php");
//Constryo el query para traer los registros en el select del HTML
$consulta = "SELECT * FROM rol ORDER BY idrol DESC";
//Ejecuto el query
$ejecutar_consulta = $conexion->query($consulta);
//Con un while recorro todos los registros generados de la consulta anterior
//Construyo las opciones del select de forma dinámica con los registros de la consulta
while($registro = $ejecutar_consulta->fetch_assoc())
{
	echo "<option value='".utf8_encode($registro["idrol"])."'";
	if($_GET["rol_slc"]==$registro["descrol"])
	{
		echo " selected";	
	}
	echo ">".utf8_encode($registro["descrol"])."</option>";
}
//$conexion->close();
?>

<?php
//if(empty($_GET["pais_slc"]))
//{
	include("conexion.php");
//}
//include("funciones.php");
$ejecutar_consulta = $conexion->query($consulta);
$num_regs = $ejecutar_consulta->num_rows;

//echo $num_regs;
if($num_regs==0)
{
	echo "<br /><br /><span class='mensajes'>No se encontraron registros con esta búsqueda :(</span><br /><br />";
}
else
{
?>
	<br /><br />
	<table>
		<thead>
			<tr>
				<th>Usuario</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Fecha Nacimiento</th>
				<th>Rol</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while($registro = $ejecutar_consulta->fetch_assoc())
			{
			?>
				<tr>
					<td><?php echo utf8_decode($registro["id_usuario"]); ?></td>
					<td><?php echo utf8_decode($registro["nombre_usuario"]); ?></td>
					<td><?php echo utf8_decode($registro["apellido_usuario"]); ?></td>
					<td><?php echo utf8_decode($registro["fechanac_usuario"]); ?></td>
					<td><?php echo utf8_decode($registro["rol_usuario"]); ?></td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
<?php
}
$conexion->close();
?>
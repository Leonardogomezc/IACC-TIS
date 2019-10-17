<script>
	window.onload = function()
	{
		var lista = document.getElementById("contacto-lista");
		lista.onchange = seleccionarContacto;

		function seleccionarContacto()
		{
			window.location="?op=cambios&user_slc="+lista.value
		}
	} 
</script>
<form id="cambio-usuario" name="cambio_frm" action="php/modificar-usuario.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Modificar de Usuario</legend>
		<div>
			<label for="contacto-lista">Usuario: </label>
			<select id="contacto-lista" class="cambio" name="user_slc" required>
				<option value="">- - -</option>
				<?php include("select-user.php"); ?>
			</select>
		</div>
		<?php 
			if($_GET["user_slc"]!=null)
			{
				$conexion2=conectarse();
				$user = $_GET["user_slc"];
				$consulta_contacto ="SELECT * FROM usuarios WHERE id_usuario='$user'";
				//echo $consulta_contacto;
				$ejecutar_consulta_contacto = $conexion2->query($consulta_contacto);
				$registro_contacto = $ejecutar_consulta_contacto->fetch_assoc();
				include("php/cambio-form.php");
			}
			include("php/mensajes.php");
		?>
	</fieldset>
</form>
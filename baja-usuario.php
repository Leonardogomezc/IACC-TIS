<form id="baja-usuario" name="baja_frm" action="php/eliminar-usuario.php" method="post" enctype="application/x-www-form-urlencoded">
	<fieldset>
		<legend>Baja de Usuario</legend>
		<div>
			<label for="usuario">Usuario: </label>
			<select id="usuario" class="cambio" name="user_slc" required>
				<option value="">- - -</option>
				<?php include("select-user.php"); ?>
			</select>
		</div>
		<div>
			<input type="submit" id="enviar-baja" class="cambio" name="enviar_btn" value="eliminar" />
		</div>
		<?php include("php/mensajes.php"); ?>
	</fieldset>
</form>
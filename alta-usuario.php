<!-- Formulario HTML para ingresar los datos de usuario nuevo. El atributo "action"  indica la pagina que procesara segun la accion a realizar y con el "method" POST -->

<form id="alta-usuario" name="alta_frm" action="php/agregar-usuario.php" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>Nuevo Usuario</legend>
		<div>
			<label for="usuario">Usuario: </label>
			<input type="text" id="usuario" class="cambio" name="user_txt" placeholder="Escribe tu Usuario" title="Tu usuario" required />
		</div>
		<div>
			<label for="nombre">Nombre: </label>
			<input type="text" id="nombre" class="cambio" name="nombre_txt" placeholder="Escribe tu nombre" title="Tu nombre" required />
		</div>
		<div>
			<label for="nombre">Apellido: </label>
			<input type="text" id="apellido" class="cambio" name="apellido_txt" placeholder="Escribe tu apellido" title="Tu apellido" required />
		</div>
		<div>
			<label for="nacimiento">Fecha de nacimiento: </label>
			<input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" title="Tu cumple" required />
		</div>
		<div>
			<label for="password">Password: </label>
			<input type="password" id="password" class="cambio" name="pass_txt" minlength="8" placeholder="Escribe tu contraseña" title="Tu pass" required />
		</div>
		<div>
			<!-- ESTE ES EL COMBO PARA SELECIONAR EL ROL -->
			<label for="rol-lista">Rol: </label>
			<select id="rol-lista" class="cambio" name="rol_slc" required>
				<option value="">- - -</option>
				<?php include("select-rol.php"); ?>
			</select>
		</div>
		
		<div>
			<input type="submit" id="enviar-alta" class="cambio" name="enviar_btn" value="Agregar" />
		</div>
		<?php include("php/mensajes.php"); ?>
	</fieldset>
</form>
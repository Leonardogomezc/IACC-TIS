<div>
	<label for="usuario">Usuario: </label>
	<input type="text" id="usuario" class="cambio" name="user_txt" placeholder="Escribe tu usuario" title="Tu usuario" value="<?php echo $registro_contacto["id_usuario"]; ?>" disabled required />
	<input type="hidden" name="user_hdn" value="<?php echo $registro_contacto["id_usuario"]; ?>" />
</div>
<div>
	<label for="nombre">Nombre: </label>
	<input type="text" id="nombre" class="cambio" name="nombre_txt" placeholder="Escribe tu nombre" title="Tu nombre" value="<?php echo $registro_contacto["nombre_usuario"]; ?>" required />
</div>
<div>
	<label for="apellido">Apellido: </label>
	<input type="text" id="apellido" class="cambio" name="apellido_txt" placeholder="Escribe tu apellido" title="Tu apellido" value="<?php echo $registro_contacto["apellido_usuario"]; ?>" required />
</div>
<div>
	<label for="nacimiento">Fecha de nacimiento: </label>
	<input type="date" id="nacimiento" class="cambio" name="nacimiento_txt" title="Tu cumple" value="<?php echo $registro_contacto["fechanac_usuario"]; ?>" required />
</div>

<div>
	<input type="submit" id="enviar-cambio" class="cambio" name="enviar_btn" value="cambiar" />
</div>
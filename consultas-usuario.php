<form action="" id="consulta-contacto" name="consulta_form" method="get">
	<fieldset>
		<legend>Consulta de contactos</legend>
		
		<?php 
			include("php/consulta-todo.php");
		 ?>

	</fieldset>
</form>
<script>
	window.onload = function()
	{
		var lista = document.getElementById("consulta-lista");

		lista.onchange = function()
		{
			window.location="?op=consultas&consulta_slc="+lista.value;
		};
	}
</script>
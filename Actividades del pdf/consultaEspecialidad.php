<head>
	<meta HTTP-EQUIV="content-Type" CONTENT="text/html; charset="utf-8">
	<title>Formulario de consultas de Especialidades</title>
	<link rel="stylesheet" type="text/css" href="estiloEspecialidad.css">
</head>
<body>

	<form id="form1" name="form1" method="post" action="gestionEspecialidad.php">
		<P class="titulo">Selecciona la especialidad</P>p><br>
		<label for="clave">Clave:</label>
		<select name="cveEsp" id="cveEspecialidad">

			<?php
			include "conectar.php";
			$resConectar=conectar();
			$sqlEspe="SELECT * FROM ESPECIALIDAD";
			$tableEspe= mysql_query($sqlEspe);
			for ($i=0; $i <$numfilasEspe ; $i++) {
				$filaEspe= mysql_fetch_array($tableEspe);
				echo'<option>', $filaEspe['cveEsp'],'</option>';
			}
			?>
		</select><br>

		<input type="submit" name="btnConsultar" id="botonConsultar" value="Consultar"/><br>
	</form>
	<a href="index.html"><img src="imagEscuela/regresar.gif" width="60" height="40"></a>


</body>

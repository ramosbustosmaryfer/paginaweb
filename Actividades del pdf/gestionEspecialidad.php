<HTML XMLNS="http://wwww.w3.org/1999/xhtml">
<<head>
	<meta HTTP-EQUIV="content-Type" CONTENT="text/html; charset=utf-8">
	<title>Formulario De Altas Especialidades</title>
	<link rel="stylesheet" type="text/css" href="estiloEspecialidad.css">
</head>
<body>
	<form id="form1" name="form1" method="post" action="actBase.php">
		<p class="titulo">Altas Especialidades</p>
		<br></br>
		<label for="clave">CLAVE:</label>
		<input type="text" name="cveEspecialidad" size="100px" maxlength="6"/><br/>
		<label for="nombre">NOMBRE:</label>
		<input type="text" name="nombreEspecialidad" id="nombreEspecialidad" size="100" maxlength="25"/><br>
		<label for="area">AREA:</label>
		<select name="nombreArea" id="nombreArea">
			<?php
			include "conectar.php";
			$resConectar=conectar();
			$sqlAreas="SELECT * FROM AREA";
			$tablaArea= mysql_query("$sqlAreas");
			$numfilasAreas=mysql_num_rows($tablaArea);
			for ($i=0; $i <$numfilasAreas ; $i++) {
				$filaArea=mysql_fetch_array($tablaArea);
				echo'<OPTION>'$filaArea['nomArea'],'</OPTION>'
				# code...
			}
			?>
		</select><BR/>
		<input type="submit" name="boton" id="botonGuardar" value="Guardar"/>
		<input type="reset" name="botonNuevo" id="botonNuevo" value="nuevo"/><br/>
	</form>

	<img src="/imagEscuela/regresar.gif" width="60" height="40" onclick="history.back()"/>

</body>
</HTML>

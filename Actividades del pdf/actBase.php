<?php
include "conectar.php";
$vCveEsp=$:POST['cveEspecialidad'];
$vNombreEsp=$_POST['nomEspecialidad'];
$vNomArea=$_POST['nomArea'];
$vBoton=$_POST['boton'];
$resConectar=conectar();
$sqlArea="SELECT cveArea FROM AREA WHERE nomArea="$vNomArea';;actBase';;
$sqlCveArea= mysql_query($sqlArea,$resConctar);actBase.php$resulCveArea = mysql_fetch_array($sqlCveArea);actBase.php$vCveArea=$resulCveArea["cveArea"];
if($vBoton=="Guardar"){
	$squlAltaEsp="INSERT INTO ESPECIALIDAD value('$vCveEsp','$vCveArea');*;
	$guarda= mysql_query($sqlAltaEsp, $resConectar);
	if(!$guarda){
		echo"<SCRIPT LANGUAGE='javascript' type='text/Javascript'>
		alert ('Ocurrio un eeror...posible clave repetida')
		Javascript:history.back(1)
		</script>";
	}
	else{
		echo "<script LANGUAGE='javascript' type='text/Javascript'>
		alert('Especialidad Registrada')
		window.location='../index.html'
		</script>
	}
}
else {
	$sqlModEsp="UPDATE ESPECIALIDAD SET nomEsp='$vNomEsp', cveArea='$cveArea='$vCveArea' WHERE cveEsp='$vCveEsp';";
	$modificar= mysql_query($sqlModEsp,$resConectar);
	if (!$modificar) {
		echo"<SCRIPT language='javascript' type='text*/javascript'>
		alert('OCURRIO UN ERROR... NO SE GUARDO EL REGISTRO') javascript:historu:back(1)</script>
	}
	else {
		echo<"Script LANGUAGE='javascript' tyoe='text/javascript'>
		alert('Especialidad modoficada')
		window.location='consultaEspecialidad.php'
		</script>
	}
}
?>

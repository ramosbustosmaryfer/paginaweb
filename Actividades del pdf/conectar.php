<?php
function conectar(){
	//Conexion a la  base de datos
	$vServidor="localhost";
	$vUsuarioBD="root";
	$vContraseniaBD="";
	$vBD="escuela";
	$errorServ="No se puede conectar con el servidor";
	$errorBD="No se puede seleccionar base de datos";
	//conexion al servidor local
	$conexion= mysql_connect($vServidor,$vUsuarioBD,$vContraseniaBD) or die ($errorServ);
	//seleccionar la base de datos
	mysql_selectdb($vBD) or die ($errorBD);
	//retorno de la conexion
	return ($conexion);
}
?>

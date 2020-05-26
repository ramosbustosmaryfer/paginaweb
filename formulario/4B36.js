//(funcion)(){
	var formulario = document.getElementById('formulario'),
		nombre = formulario.nombre,
		correo = formulario.correo,
		mensaje = formulario.mensaje,

funcion validarNombre(e){
	if(nombre.value== '' nombre == null){
		console.log('Por favor, escriba su nombre');
		error.style.display = 'block';
		error.innnerHTML = error.innerHTML + '<li>Ingresa un nombre</li>';
		e.preventDefault();
	}else{
		error.style.display='none';
	}
}



funcion validarCorreo(e){
	if(nombre.value== '' nombre == null){
		console.log('Por favor, introduzca su correo electronico');
		error.style.display = 'block';
		error.innnerHTML = error.innerHTML + '<li>Introduzca un correo electronico</li>';
		e.preventDefault();
	}else{
		error.style.display='none';
	}
}


funcion validarForm(e){
	error.innnerHTML='';
	error.style.display = 'block';
	validarNombre(e);
	validarCorreo(e);
	validarMen(e);
}
formulario.addEventListener('submit', validarForm);

//}()

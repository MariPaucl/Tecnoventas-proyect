const form = document.getElementById('form');
const tipoId = document.getElementById('tipoId');
const email = document.getElementById('email');
const password = document.getElementById('password');
const documento = document.getElementById('documento');
const Nombres = document.getElementById('Nombres');
const Apellidos = document.getElementById('Apellidos');
const cell = document.getElementById('cell');
const fecha = document.getElementById('fecha');

function validarForm() {

    const seleccion    = tipoId.value.trim();
	var emailValue     = email.value.trim();
	var passwordValue  = password.value.trim();
	var documentValue  = documento.value.trim();
	var NombresValue   = Nombres.value.trim();
	var ApellidosValue = Apellidos.value.trim();
	var cellValue      = cell.value.trim();
	var fechaValue     = fecha.value.trim();
	var response       = grecaptcha.getResponse();

    if (response.length === 0) {
        alert("Por favor, completa el captcha.");
        return false; // Detiene el envío del formulario
    }

    if (seleccion === ''){
        setErrorFor(tipoId, 'Debe seleccionar un tipo de documento');
	} else {
		setSuccessFor(tipoId);
    }

	if (documentValue === '') {
		setErrorFor(documento, 'No puede dejar el numero de documento en blanco');
	} else {
		setSuccessFor(documento);
	}

	if (NombresValue === '') {
		setErrorFor(Nombres, 'No puede dejar los nombres en blanco');
	} else {
		setSuccessFor(Nombres);
	}

	if (ApellidosValue === '') {
		setErrorFor(Apellidos, 'No puede dejar los apellidos en blanco en blanco');
	} else {
		setSuccessFor(Apellidos);
	}

	if(emailValue === '') {
		setErrorFor(email, 'No puede dejar el correo en blanco');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'No ingreso un correo válido');
	} else {
		setSuccessFor(email);
	}

	if(passwordValue === '') {
		setErrorFor(password, 'No puede dejar la contraseña en blanco');
	} else {
		setSuccessFor(password);
	}

	if (cellValue === '') {
		setErrorFor(cell, 'No puede dejar el celular en blanco');
	} else {
		setSuccessFor(cell);
	}

	if (fechaValue === '') {
		setErrorFor(fecha, 'No puede dejar la fecha en blanco');
	}
    else {
		setSuccessFor(fecha);
	}
	if (seleccion === '' || emailValue === '' ||  documentValue === '' || passwordValue === '' || documentValue === '' || NombresValue === '' || ApellidosValue === '' || cellValue === '' || fechaValue === '') {
        return false;
    };

	if(!verifyAge(fechaValue)) {
		alert("Debe tener al menos 16 años para poder ingresar");
		return false;
	}
	alert ('Te has registrado correctamente');
	return true;

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function verifyAge(){
    const fechaNac = new Date(fecha.value);
    const hoy = new Date();
    const edad = hoy.getFullYear() - fechaNac.getFullYear();
    if (
        hoy.getMonth() < fechaNac.getMonth() ||
        (hoy.getMonth() === fechaNac.getMonth() && hoy.getDate() < fechaNac.getDate())
    ) {
        edad--;
    }
    if(edad < 16){
        return false;
    }
    else{
		return true;
	}
    
}

}






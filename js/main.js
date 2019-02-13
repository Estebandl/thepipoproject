function recollirUsuari() {
	var userGuardat = localStorage.getItem('usuari');
	document.getElementById('buscarUsuari').value = userGuardat;
}

recollirUsuari();
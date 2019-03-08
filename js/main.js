function logout() {
	localStorage.setItem('usuari', '');
	location.href = "php/webElements/destroy.php";
}
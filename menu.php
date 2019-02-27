<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>SAO Prat</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
	
	<?php include 'php/webelements/header.php' ?>

<body>
	
	<div class="container"><center>
		Alerta alerta
	</center></div>
</body>

	<script>
		var usuari="";
		if (localStorage.getItem('usuari')){
			usuari = localStorage.getItem('usuari');
		} else {
			if('<?php if(isset($_SESSION['usuari'])) echo $_SESSION['user'];?>'){
				localStorage.setItem('usuari', '<?php if(isset($_SESSION['user'])) echo $_SESSION['user']?>');
				usuari = localStorage.getItem('usuari');
			} else {
				location.href="index.php";
			}
		}
	</script>

</html>
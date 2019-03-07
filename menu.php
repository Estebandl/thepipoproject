<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>SAO Prat</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
	

<body>
<?php include('php/webelements/header.php') ?>
	
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
<!DOCTYPE html>
<html>
<head>
	<title>SAO Prat - Gestió Usuaris</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<?php include('php/webelements/header.php') ?>
	
	<div class="container"><center><br><br><br><br><br><br><br><br><br>
		<img src="img/404.png" style="width: 100%">
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
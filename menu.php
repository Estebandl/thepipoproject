<!DOCTYPE html>
<html>
<head>
	<title>SAO Prat - Inici</title>
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
		if('<?php if(isset($_SESSION['usuari'])) echo $_SESSION['usuari'];?>'){
			localStorage.setItem('usuari', '<?php if(isset($_SESSION['usuari'])) echo $_SESSION['usuari']?>');
			usuari = localStorage.getItem('usuari');
		} else {
			location.href="index.php";
		}
	}
</script>

</html>
<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SAO Prat - Iniciar sessio</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="icon" type="image/png" href="img/icons/favicon.png"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
	<div class="container"><center>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="col-lg-4 col-md-4 col-sm-4"></div>
				<div class="col-lg-4 col-md-4 col-sm-4 login-table">
					<div class="form-group">
						<img src="img/logo.png" style="width: 156px; padding-bottom: 10px;">
						<form action="php/login.php" method="POST">
							<div class="inner-addon left-addon">
								<i class="fas fa-user"></i>
								<input type="text" class="form-group" id="usuari" name="usuari" placeholder="Nom d'usuari" required>
							</div>
							<div class="inner-addon left-addon">
								<i class="fas fa-key"></i>
								<input type="password" class="form-group" id="password" name="password" placeholder="Contrasenya" required>
							</div>
							<button class="btn-sub" type="submit">Inicia Sessió</button>
						</form>
					</div>
				</div>
				<div class="col-lg-4"></div>
			</div>
		</div>
	</center></div>
</body>

</html>
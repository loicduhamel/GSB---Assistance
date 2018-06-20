<?php 

require_once('./Module/configPDO.php');
require_once('./Module/RecupMail.php');
require_once('./Module/Connexion.php');

if(isset($_POST["sendmailbutton"])){
	$mail = $_POST['addmail'];
	sendmail($mail,$db);
}

if(isset($_POST["conbutton"])){
	$login = $_POST['user'];
	$password = $_POST['password'];
	connexion($login,$password,$db);
}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>GSB - Assistance</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="img/favicon.ico">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<script src="./js/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="./js/AjaxRequest.js"></script>
	</head>

	<body>
		
		<div class="container">
			<div class="wrapper">
				<form method="post" class="login-form">
					<a href="index.php"><img class="logo" src="img/logo.png" alt="GSB"></img></a>
					<h3 class="title">Assistance</h3>
					<div class="form-group">
						<input type="text" class="form-control" id="form-connect" placeholder="Utilisateur" required="" name="user">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="form-connect" placeholder="Mot de passe" required="" name="password">
					</div>
					<br><a class="mdp-missing" data-toggle="modal" data-target="#Modalmdp" href="">Mot de passe oublié ?</a></br>
					<button name="conbutton" id="connect" type="submit" class="btn btn-primary">Connexion</button>
				</form>
			</div>
		</div>

		<div class="modal fade" id="Modalmdp" tabindex="-1" role="dialog" aria-labelledby="Modalmdp" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" style="margin-left:22%;">Mot de passe oublié</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<form method="post">
					<div class="form-group">
						<p>Veuillez entrer une adresse e-mail valide pour recevoir votre nouveau mot de passe.</p>
						<input type="text" name="addmail" class="form-control" aria-describedby="Adresse e-mail" placeholder="Adresse e-mail" required="">
					</div>
				</div>
					<div class="modal-footer">
						<button type="submit" name="sendmailbutton" class="btn btn-primary">Valider</button>
					</div>
				</div>
				</form>
			</div>
		</div>

		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
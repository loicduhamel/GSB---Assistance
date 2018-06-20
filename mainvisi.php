<?php 
session_start();
require_once('./Module/configPDO.php');
require_once ('./modalvisi.php');

if(isset($_SESSION['nom'])){

}else{
	header("location:index.php");
}

if(isset($_POST["deconnexionbuttonvisi"])){
	session_destroy();
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>GSB - Assistance - Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="img/favicon.ico">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<script src="./js/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="./js/AjaxRequest.js"></script>
		<script type="text/javascript" src="./js/DataToSetEquipementAjax.js"></script>
		<script type="text/javascript" src="./js/Event.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-light bg-faded">
			<a class="navbar-brand" href="mainvisi.php">
			  <img class="logo-page" src="img/logo.png" alt="GSB">
			</a>
			<p class="serv-web">Assistance</p>
			<div class="dropdown">
				<a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php echo $_SESSION['prenom'].' '.$_SESSION['nom']; ?>
				</a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a data-toggle="modal" data-target="#deconnexionvisi" class="dropdown-item" href="#">Déconnexion</a>
				</div>
			</div>
		</nav>
		<div class="container container_visite">
			<div class="row">
				<div class="white-zonevisite">
					<h1 class="title-page">Bienvenue</h1>
					<div class="container">
						<div class="row row_visite">
							<a data-toggle="modal" data-target="#equipmentvisi" href="">
								<div class="bloc"><p>Mes équipements</p>
									<img class="main-logo" src="img/main/view-list-button.png" alt="">
								</div>
							</a>
							<a data-toggle="modal" data-target="#listincidentvisi" href="">
								<div class="bloc"><p>Mes assistances</p>
									<img class="main-logo" src="img/main/spanner.png" alt="">
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>



		<script defer src="js/fontawesome/svg-with-js/js/fontawesome-all.js"></script>
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
<script>
	loadAllData();
</script>
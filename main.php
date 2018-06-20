<?php 
require_once('./Module/configPDO.php');
require_once('./Module/Insert.php');
session_start();

if(isset($_SESSION['nom'])){

}else{
	header("location:index.php");
}
if(isset($_POST['ValidComp'])){
	$typeComp = $_POST['typeComp'];
	$labelle = $_POST['nom'];

	if($typeComp == "disquedur"){
		$capacite = $_POST['capacite'];
		$type = $_POST['type'];
		insertCompAv($labelle,$typeComp,$capacite,$type,$db);
	}
	elseif ($typeComp == "memoire") {
		$capacite = $_POST['capacite'];
		$type = $_POST['type'];
		insertCompAv($labelle,$typeComp,$capacite,$type,$db);
	}
	else{
		insertCompBas($labelle,$typeComp,$db);
	}
	header("location:main.php");
}

if(isset($_POST['ValidEquip'])){
	$nompc = $_POST['nompc'];
	$type = $_POST['typeEquipement'];
	$proc = $_POST['processeur'];
	$dd = $_POST['disquedur'];
	$memo = $_POST['memoire'];
	$marq = $_POST['marque'];
	$dAchat = $_POST['dateAchat'];
	$garan = $_POST['garantie'];
	$fou = $_POST['fournisseur'];
	$visi = $_POST['visiteur'];
	insertEquip($nompc,$type,$proc,$dd,$memo,$marq,$dAchat,$garan,$fou,$visi,$db);
	header("location:main.php");
}

if(isset($_POST['ValidaddVisiteur'])){
	$nom = $_POST['nomvisiteur'];
	$prenom = $_POST['prenomvisiteur'];
	$password = $_POST['password'];
	$mail = $_POST['mail'];
	$login = $prenom.'.'.$nom;
	addvisiteur($nom,$prenom,$login,$password,$mail,$db);
	header("location:main.php");	
}

if(isset($_POST['ValiddelVisiteur'])){
	$id = $_POST['visiteurdel'];
	delvisiteur($id,$db);
	header("location:main.php");	
}

if(isset($_POST['ValidIncident'])){
	$objet = $_POST["objet"];
	$nompc = $_POST["nompcinc"];
	$niveau = $_POST["niveau"];
	$technicien = "";
	$demandeur = $_POST["demandeur"];
	$mail = $_POST[$demandeur];
	$solution = null;
	$duree = null;
	$datePrCh = date("Y-m-d H:i:s");
	if($niveau == 1){
		$technicien = $_SESSION['idtech'];
		$dateinter = date("Y-m-d");
	}
	else{
		$technicien = $_POST["technicien"];
		$dateinter = null;
	}
	$message ='Un nouveau ticket d\'incident pour un de vos équipement vient d\'être créé.';
	addIncident($objet,$datePrCh,$dateinter,$solution,$duree,$nompc,$niveau,$technicien,$db);
	mail($mail, 'Nouveau ticket',$message);
	header("location:main.php");	
}

if(isset($_POST['validupdt'])){
	$i = $_POST['iid'];
	if($i == 7){
	}
	$id = $_POST['id'.$i];
	$dateinter = $_POST['dateIntervention'.$i];
	$solution = $_POST['solution'.$i];
	$statut = $_POST['libellest'.$i];
	$duree = $_POST['duree'.$i];
	UpdInc($dateinter,$solution,$duree,$statut,$id,$db);
	header("location:main.php");
}

if(isset($_POST['closeupdt'])){
	header("location:main.php");
}

if(isset($_POST["deconnexionbutton"])){
	session_destroy();
	header("location:index.php");
}


require_once ('./modal.php');
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
			<a class="navbar-brand" href="main.php">
			  <img class="logo-page" src="img/logo.png" alt="GSB">
			</a>
			<p class="serv-web">Assistance</p>
			<div class="dropdown">
				<a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php echo $_SESSION['prenom'].' '.$_SESSION['nom']; ?>
				</a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a data-toggle="modal" data-target="#deconnexion" class="dropdown-item" href="#">Déconnexion</a>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row row_main">
				<div class="white-zonemain">
					<h1 class="title-page">Bienvenue</h1>
					<div class="container">
						<div class="row row_main">
							<a data-toggle="modal" data-target="#equipment" href="">
								<div class="bloc"><p>Liste des équipements</p>
									<img class="main-logo" src="img/main/view-list-button.png" alt="">
								</div>
							</a>
							<a data-toggle="modal" data-target="#listincident" href="">
								<div class="bloc"><p>Liste des tickets d'incidents</p>
									<img class="main-logo" src="img/main/spanner.png" alt="">
								</div>
							</a>
							<a data-toggle="modal" data-target="#addequip" href="">
								<div class="bloc"><p>Ajouter un équipement</p>
									<img class="main-logo" src="img/main/computer.png" alt="">
								</div>
							</a>
							<a data-toggle="modal" data-target="#addcomp" href="">
								<div class="bloc"><p>Ajouter un composant</p>
									<img class="main-logo" src="img/main/fan.png" alt="">
								</div>
							</a>
						</div>
						<div class="row row_main">
							<a data-toggle="modal" data-target="#addincident" href="">
								<div class="bloc"><p>Ajouter un ticket d'incident</p>
									<img class="main-logo" src="img/main/ticket.png" alt="">
								</div>
							</a>
							<a data-toggle="modal" data-target="#addstat" href="">
								<div class="bloc"><p>Consulter les statistiques</p>
									<img class="main-logo" src="img/main/bar-chart.png" alt="">
								</div>
							</a>
							<a data-toggle="modal" data-target="#addVisiteur" href="">
								<div class="bloc"><p>Ajouter un visiteur</p>
									<img class="main-logo" src="img/main/add-user.png" alt="">
								</div>
							</a>
							<a data-toggle="modal" data-target="#delvisiteur" href="">
								<div class="bloc"><p>Supprimer un visiteur</p>
									<img class="main-logo" src="img/main/remove-user.png" alt="">
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
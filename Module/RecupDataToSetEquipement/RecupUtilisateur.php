<?php

 require_once ('../configPDO.php');

try {

	$dataGetUtilisateur = $db->prepare('SELECT nom,u.id from utilisateur u inner join visiteur v on u.id=v.id_utilisateur');

	$dataGetUtilisateur->execute();
	$dataGetUtilisateur->setFetchMode(PDO::FETCH_ASSOC);
	$dataUtilisateur = array();
	while($setdata = $dataGetUtilisateur->fetch()) {
		$dataUti = array('id' => $setdata["id"],'libelle' => $setdata["nom"]);
		array_push($dataUtilisateur, $dataUti);
	}
    $dataGetUtilisateur->closeCursor();
    echo json_encode($dataUtilisateur, JSON_NUMERIC_CHECK);
}
catch(PDOException $e){
    echo $e->getMessage();
	}
?>
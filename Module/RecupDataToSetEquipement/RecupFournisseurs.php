<?php

 require_once ('../configPDO.php');

try {

	$dataGetFournisseur = $db->prepare('SELECT id,nomf from fournisseur');

	$dataGetFournisseur->execute();
	$dataGetFournisseur->setFetchMode(PDO::FETCH_ASSOC);
	$dataFournisseur = array();
	while($setdata = $dataGetFournisseur->fetch()) {
		$dataFou = array('id' => $setdata["id"],'libelle' => $setdata["nomf"]);
		array_push($dataFournisseur, $dataFou);
	}
    $dataGetFournisseur->closeCursor();
    echo json_encode($dataFournisseur, JSON_NUMERIC_CHECK);
}
catch(PDOException $e){
    echo $e->getMessage();
	}
?>
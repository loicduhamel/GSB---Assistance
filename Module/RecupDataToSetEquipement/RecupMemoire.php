<?php

 require_once ('../configPDO.php');

try {

	$dataGetMemoire = $db->prepare('SELECT id, libellemem from memoire');

	$dataGetMemoire->execute();
	$dataGetMemoire->setFetchMode(PDO::FETCH_ASSOC);
	$dataMemoire = array();
	while($setdata = $dataGetMemoire->fetch()) {
		$dataMem = array('id' => $setdata["id"],'libelle' => $setdata["libellemem"]);
		array_push($dataMemoire, $dataMem);
	}
    $dataGetMemoire->closeCursor();
    echo json_encode($dataMemoire, JSON_NUMERIC_CHECK);
}
catch(PDOException $e){
    echo $e->getMessage();
	}
?>
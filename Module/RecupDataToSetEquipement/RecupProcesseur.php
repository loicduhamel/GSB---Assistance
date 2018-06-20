<?php

 require_once ('../configPDO.php');


try {

	$dataGetProcesseur = $db->prepare('SELECT id,libellep from processeur');
	$dataGetProcesseur->execute();
	$dataGetProcesseur->setFetchMode(PDO::FETCH_ASSOC);
	$dataProcesseur = array();
	while($setdata = $dataGetProcesseur->fetch()) {
		$dataPro = array('id' => $setdata["id"],'libelle' => $setdata["libellep"]);
		array_push($dataProcesseur, $dataPro);
	}
    $dataGetProcesseur->closeCursor();
    echo json_encode($dataProcesseur, JSON_NUMERIC_CHECK);
}
catch(PDOException $e){
    echo $e->getMessage();
	}
?>
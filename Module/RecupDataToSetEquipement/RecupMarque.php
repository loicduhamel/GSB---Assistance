<?php

 require_once ('../configPDO.php');

try {

	$dataGetMarque = $db->prepare('SELECT id,libellem from marque');

	$dataGetMarque->execute();
	$dataGetMarque->setFetchMode(PDO::FETCH_ASSOC);
	$dataMarque = array();
	while($setdata = $dataGetMarque->fetch()) {
		$dataMar = array('id' => $setdata["id"],'libelle' => $setdata["libellem"]);
		array_push($dataMarque, $dataMar);
	}
    $dataGetMarque->closeCursor();
    echo json_encode($dataMarque, JSON_NUMERIC_CHECK);
}
catch(PDOException $e){
    echo $e->getMessage();
	}
?>
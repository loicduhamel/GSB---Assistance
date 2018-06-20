<?php

 require_once ('../configPDO.php');

try {

	$dataGetDisqueDur = $db->prepare('SELECT id,libelleDD from disquedur');

	$dataGetDisqueDur->execute();
	$dataGetDisqueDur->setFetchMode(PDO::FETCH_ASSOC);
	$dataDisqueDur = array();
	while($setdata = $dataGetDisqueDur->fetch()) {
		$dataDis = array('id' => $setdata["id"],'libelle' => $setdata["libelleDD"]);
		array_push($dataDisqueDur, $dataDis);
	}
    $dataGetDisqueDur->closeCursor();
    echo json_encode($dataDisqueDur, JSON_NUMERIC_CHECK);
}
catch(PDOException $e){
    echo $e->getMessage();
	}
?>
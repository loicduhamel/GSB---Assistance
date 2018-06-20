<?php
 
 require_once (__DIR__.'/configPDO.php');

try {

	$getDataStatut = $db->prepare('SELECT id, libellest from statut');

	$getDataStatut->execute();
	$getDataStatut->setFetchMode(PDO::FETCH_ASSOC);
	$statutData = array();

	while($setData = $getDataStatut->fetch()) {
		$data = array("id"=>$setData['id'], "param"=>$setData['libellest']);
		 array_push($statutData, $data);
    }   

    $getDataStatut->closeCursor();
    echo json_encode($statutData, JSON_NUMERIC_CHECK);
}
catch(PDOException $e){
    echo $e->getMessage();
	}
?>
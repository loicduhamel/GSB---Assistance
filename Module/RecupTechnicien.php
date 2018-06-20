<?php
 
 require_once (__DIR__.'/configPDO.php');

try {

	$getDataTechnicien = $db->prepare('SELECT count(*), t.id, nom from technicien t inner join utilisateur u on u.id=t.id_utilisateur');
	$getDataTechnicien->execute();
	$getDataTechnicien->setFetchMode(PDO::FETCH_ASSOC);
	$technicienData = array();

	while($setData = $getDataTechnicien->fetch()) {
		$data = array("id"=>$setData['id'], "param"=>$setData['nom'], "nbr"=>$setData['count(*)']);
		 array_push($technicienData, $data);
    }   

    $getDataTechnicien->closeCursor();
    echo json_encode($technicienData, JSON_NUMERIC_CHECK);
}
catch(PDOException $e){
    echo $e->getMessage();
	}
?>
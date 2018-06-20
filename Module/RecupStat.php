<?php
 
 require_once (__DIR__.'/configPDO.php');

try {

	$getStat = $db->prepare('select count(*),id_Statut from incident GROUP BY id_statut');

	$getStat->execute();
	$getStat->setFetchMode(PDO::FETCH_ASSOC);
	$stat = array();

	while($setData = $getStat->fetch()) {
		$data = array("id"=>$setData['id_Statut'], "nbr"=>$setData['count(*)']);
		 array_push($stat, $data);
    }   

    $getStat->closeCursor();
    echo json_encode($stat, JSON_NUMERIC_CHECK);
}
catch(PDOException $e){
    echo $e->getMessage();
	}
?>
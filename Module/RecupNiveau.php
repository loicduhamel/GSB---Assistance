<?php
 
 require_once (__DIR__.'/configPDO.php');

try {

	$getDataNiveau = $db->prepare('SELECT id, libelle from niveau');

	$getDataNiveau->execute();
	$getDataNiveau->setFetchMode(PDO::FETCH_ASSOC);
	$niveauData = array();

	while($setData = $getDataNiveau->fetch()) {
		$data = array("id"=>$setData['id'], "libelle"=>$setData['libelle']);
		 array_push($niveauData, $data);
    }   

    $getDataNiveau->closeCursor();
    echo json_encode($niveauData, JSON_NUMERIC_CHECK);
}
catch(PDOException $e){
    echo $e->getMessage();
	}
?>
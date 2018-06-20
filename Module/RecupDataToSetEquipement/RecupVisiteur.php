<?php

 require_once ('../configPDO.php');

try {

	$dataGetVisiteur = $db->prepare('SELECT count(*), nom,v.id,mail, id_utilisateur from utilisateur u inner join visiteur v on v.id_utilisateur=u.id');

	$dataGetVisiteur->execute();
	$dataGetVisiteur->setFetchMode(PDO::FETCH_ASSOC);
	$dataVisiteur = array();
	while($setdata = $dataGetVisiteur->fetch()) {
		$dataVis = array('id' => $setdata["id"], 'user' => $setdata["id_utilisateur"], 'mail' => $setdata["mail"], 'libelle' => $setdata["nom"],"nbr"=>$setdata["count(*)"]);
		array_push($dataVisiteur, $dataVis);
	}
    $dataGetVisiteur->closeCursor();
    echo json_encode($dataVisiteur, JSON_NUMERIC_CHECK);
}
catch(PDOException $e){
    echo $e->getMessage();
	}
?>
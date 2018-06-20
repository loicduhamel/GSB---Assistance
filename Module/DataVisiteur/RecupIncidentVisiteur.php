<?php
 session_start();
 require_once ('../configPDO.php');

try {
	$getData = $db->prepare('SELECT i.id,objet, datePriseCharge, dateIntervention, solution, duree, nompc, id_Niveau, nom, libellest from incident i inner join equipement e on e.id=i.id_Equipement inner join statut s on s.id=i.id_Statut inner join technicien t on t.id=i.id_Technicien inner join utilisateur u on u.id=t.id_Utilisateur where id_visiteur=?');
	$getData->execute(array($_SESSION["idvis"]));
	$getData->setFetchMode(PDO::FETCH_ASSOC);
	$incidentData = array();
	while($setData = $getData->fetch()) {

		$data= array("id"=>$setData['id'],"nompc"=>$setData['nompc'],"objet"=>$setData['objet'], "datePriseCharge"=>$setData['datePriseCharge'], "dateIntervention"=> $setData['dateIntervention'], "solution"=>$setData['solution'], "duree"=>$setData['duree'], "id_Niveau"=>$setData['id_Niveau'], "nom"=>$setData['nom'], "libellest"=>$setData['libellest']);
		 
		 array_push($incidentData, $data);
            
        }    
        $getData->closeCursor();
       
        echo json_encode($incidentData, JSON_NUMERIC_CHECK);
}
catch(PDOException $e){
    echo $e->getMessage();
	}
?>
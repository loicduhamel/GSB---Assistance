<?php
 
 require_once (__DIR__.'/configPDO.php');

try {

	$getDataEquipement = $db->prepare('SELECT e.id,mem.capaciteMemoire,e.typeEquipement,e.dateAchat,e.garantie,e.nompc,f.nomf,dd.capaciteDisque,dd.typeDisque,mem.typeMemoire,m.libellem,p.libellep,ut.nom FROM equipement e inner join disquedur dd on dd.id=e.id_DisqueDur inner join fournisseur f on f.id=e.id_Fournisseur inner join marque m on m.id=e.id_Marque inner join processeur p on p.id=e.id_Processeur inner join visiteur v on v.id=e.id_visiteur inner join utilisateur ut on ut.id=v.id_utilisateur inner join memoire mem on mem.id=e.id_memoire');

	$getDataEquipement->execute();
	$getDataEquipement->setFetchMode(PDO::FETCH_ASSOC);
	$equipementData = array();

	while($setData = $getDataEquipement->fetch()) {
		$datae = array("param"=>$setData['nompc'], "id"=>$setData['id'], "dateAchat"=>$setData['dateAchat'], "garantie"=> $setData['garantie'], "fournisseur"=>$setData['nomf'], "capacite"=>$setData['capaciteDisque'], "typeDisque"=>$setData['typeDisque'], "typeMemoire"=>$setData['typeMemoire'], "marque"=>$setData['libellem'], "processeur"=>$setData['libellep'], "utilisateur"=>$setData['nom'], "typeEquipement"=>$setData['typeEquipement'], "capaciteMemoire"=>$setData['capaciteMemoire']);
		 array_push($equipementData, $datae);
    }   

    $getDataEquipement->closeCursor();
    echo json_encode($equipementData, JSON_NUMERIC_CHECK);
}
catch(PDOException $e){
    echo $e->getMessage();
	}
?>
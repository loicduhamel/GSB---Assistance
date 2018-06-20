<?php 

function insertEquip($nompc,$type,$proc,$dd,$memo,$marq,$dAchat,$garan,$fou,$visi,$db){
	try {
		$sql = 'INSERT into equipement (nompc,typeEquipement,id_Processeur,id_DisqueDur,id_Memoire,id_Marque,dateAchat,garantie,id_Fournisseur,id_Visiteur) values (?,?,?,?,?,?,?,?,?,?)';

		$insertData = $db->prepare($sql);
		$insertData->execute(array($nompc,$type,$proc,$dd,$memo,$marq,$dAchat,$garan,$fou,$visi));
		$insertData->setFetchMode(PDO::FETCH_ASSOC);
    	$insertData->closeCursor();
	}
	catch(PDOException $e){
    	echo $e->getMessage();
	}
}

function insertCompBas($nom,$typeComp,$db){
	try {
		if($typeComp == "processeur"){
			$sql = 'INSERT into processeur (libellep) values (?)';
		}
		else{
			$sql = 'INSERT into marque (libellem) values (?)';	
		}
		$insertData = $db->prepare($sql);
		$insertData->execute(array($nom));
		$insertData->setFetchMode(PDO::FETCH_ASSOC);
    	$insertData->closeCursor();
	}
	catch(PDOException $e){
    	echo $e->getMessage();
	}
}

function insertCompAv($nom,$typeComp,$capacite,$type,$db){
	try {
		if($typeComp == "disquedur"){
			$sql = 'INSERT into disquedur (libelledd,capaciteDisque,typeDisque) values (?,?,?)';
		}
		else{
			$sql = 'INSERT into mempoire (libellemem,capaciteMemoire,typeMemoire) values (?,?,?)';	
		}
		$insertData = $db->prepare($sql);
		$insertData->execute(array($nom,$capacite,$type));
		$insertData->setFetchMode(PDO::FETCH_ASSOC);
    	$insertData->closeCursor();
	}
	catch(PDOException $e){
    	echo $e->getMessage();
	}
}

function addvisiteur($nom,$prenom,$login,$password,$mail,$db){
	try {
		$sql = 'INSERT into utilisateur (nom,prenom,login,password,mail) values (?,?,?,?,?); Insert into visiteur (id_utilisateur) select max(id) from utilisateur';
		$insertData = $db->prepare($sql);
		$insertData->execute(array($nom,$prenom,$login,$password,$mail));
		$insertData->setFetchMode(PDO::FETCH_ASSOC);
    	$insertData->closeCursor();
	}
	catch(PDOException $e){
    	echo $e->getMessage();
	}
}

function delvisiteur($id,$db){
	try {
		$sql = "DELETE from visiteur where id_utilisateur in (select id from utilisateur where id = ".$id." ); DELETE from utilisateur where id = ".$id;
		$insertData = $db->prepare($sql);
		$insertData->execute();
		$insertData->setFetchMode(PDO::FETCH_ASSOC);
    	$insertData->closeCursor();
	}
	catch(PDOException $e){
    	echo $e->getMessage();
	}
}

function addIncident($objet,$datePrCh,$dateinter,$solution,$duree,$equip,$niveau,$technicien,$db){
	try {
		$sql = 'INSERT INTO incident (objet, datePriseCharge, dateIntervention, solution, duree, id_Equipement, id_Niveau, id_Statut, id_Technicien) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$insertData = $db->prepare($sql);
		$insertData->execute(array($objet,$datePrCh,$dateinter,$solution,$duree,$equip,$niveau,1,$technicien));
		$insertData->setFetchMode(PDO::FETCH_ASSOC);
    	$insertData->closeCursor();
	}
	catch(PDOException $e){
    	echo $e->getMessage();
	}
}

function UpdInc($dateinter,$solution,$duree,$statut,$id,$db){
	try {
		$sql = 'UPDATE incident SET dateIntervention = ?, solution = ?, duree = ?, id_Statut = ? where id = ?';
		$updateData = $db->prepare($sql);
		$updateData->execute(array($dateinter,$solution,$duree,$statut,$id));
		$updateData->setFetchMode(PDO::FETCH_ASSOC);
    	$updateData->closeCursor();
	}
	catch(PDOException $e){
    	echo $e->getMessage();
	}
}

?>
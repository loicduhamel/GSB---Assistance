function loadAllData(){
	loadDataEquipement();
	loadDataIncident();
	loadDataToSetEquipement();
	loadDataNiveau();
	loadDataTechnicien();
	loadDataStat();
	loadDataEquipementVisiteur();
	loadDataIncidentVisiteur();
}

function loadDataMail(dataMail){

	$.ajax({
		url: './Module/RecupMail.php',
		type: 'GET',
		data: {
			'dataMail':dataMail,
		},
		success: function(data) {

			var listeMail=JSON.parse(data);
		}
	});
};

function loadDataEquipement(equipementData){

	$.ajax({
		url: './Module/RecupEquipement.php',
		type: 'GET',
		data: {
			'equipementData':equipementData,
		},
		success: function(data) {

			var listeEquipements=JSON.parse(data);
			GenerateEquipement(listeEquipements,'tabequipement');
			GenerateOptionGL(listeEquipements,'nompcinc');
		}
	});
};

function loadDataEquipementVisiteur(equipementData){

	$.ajax({
		url: './Module/DataVisiteur/RecupEquipementVisiteur.php',
		type: 'GET',
		data: {
			'equipementData':equipementData,
		},
		success: function(data) {

			var listeEquipements=JSON.parse(data);
			GenerateEquipement(listeEquipements,'tabequipementvisi');
		}
	});
};

function loadDataIncident(incidentData){

	$.ajax({
		url: './Module/RecupIncident.php',
		type: 'GET',
		data: {
			'incidentData':incidentData,
		},
		success: function(data) {

			var listeIncidents=JSON.parse(data);
			GenerateTableauIncident(listeIncidents,'tabincident');
		}
	});
};

function loadDataIncidentVisiteur(incidentData){

	$.ajax({
		url: './Module/DataVisiteur/RecupIncidentVisiteur.php',
		type: 'GET',
		data: {
			'incidentData':incidentData,
		},
		success: function(data) {

			var listeIncidents=JSON.parse(data);
			GenerateTableauIncident(listeIncidents,'tabincidentvisi');
		}
	});
};

function loadDataNiveau(niveauData){

	$.ajax({
		url: './Module/RecupNiveau.php',
		type: 'GET',
		data: {
			'niveauData':niveauData,
		},
		success: function(data) {

			var listeNiveaux=JSON.parse(data);
			GenerateOptionNiveau(listeNiveaux);
		}
	});
};

function loadDataTechnicien(technicienData){

	$.ajax({
		url: './Module/RecupTechnicien.php',
		type: 'GET',
		data: {
			'technicienData':technicienData,
		},
		success: function(data) {

			var listeTechnicien=JSON.parse(data);
			GenerateOptionGL(listeTechnicien,'technicien');
			GenerateStat(listeTechnicien,'tec');
		}
	});
};

function loadDataStat(stat){

	$.ajax({
		url: './Module/RecupStat.php',
		type: 'GET',
		data: {
			'stat':stat,
		},
		success: function(data) {

			var Listestat=JSON.parse(data);
			GenerateStat(Listestat,'statrow');
		}
	});
};

function GenerateStat(data,element){
	var option="";
	for(i=0; i<data.length; i++) {
		option += `<td scope="col">`+ data[i].nbr + `</td>`;
	}
	document.getElementById(element).innerHTML=option;
};

function GenerateOptionNiveau(listeNiveaux){
	var option="";
	for(i=0; i<listeNiveaux.length; i++) {
		option += `<option value ='`+listeNiveaux[i].id+`'>`+ listeNiveaux[i].id + `. ` +listeNiveaux[i].libelle +`</option>`;
	}
	document.getElementById('niveau').innerHTML=option;
};

function GenerateOptionGL(data,element){
var option="";
	for(i=0; i<data.length; i++) {
		console.log(data[i].id,data[i].param);
		option += `<option value ='`+data[i].id+`'>` + data[i].param +`</option>` ;
	}
	document.getElementById(element).innerHTML=option;
};

function GenerateEquipement(listeEquipements,element){
	var tableauAuto;
	tableauAuto=`<div class="table-responsive"><table class="table table-striped" id="`+element+`"><thead>
	<tr>
	<th scope="col">Modèle</th>
	<th scope="col">Marque</th>
	<th scope="col">Type d'équipement</th>
	<th scope="col">Capacité Stockage</th>
	<th scope="col">Type de Stockage</th>
	<th scope="col">Capacité de la RAM</th>
	<th scope="col">Type de RAM</th>
	<th scope="col">Processeur</th>
	<th scope="col">Date d'achat</th>
	<th scope="col">Garantie</th>
	<th scope="col">Fournisseur</th>
	<th scope="col">Affecté</th>
	</tr></thead><tbody>`;
	for(i=0; i<listeEquipements.length; i++) {
		tableauAuto+=`<tr>
		<td>`+listeEquipements[i].param+`</td>
		<td>`+listeEquipements[i].marque+`</td>
		<td>`+listeEquipements[i].typeEquipement+`</td>
		<td>`+listeEquipements[i].capacite+` GO</td>
		<td>`+listeEquipements[i].typeDisque+`</td>
		<td>`+listeEquipements[i].capaciteMemoire+` GO</td>
		<td>`+listeEquipements[i].typeMemoire+`</td>
		<td>`+listeEquipements[i].processeur+`</td>
		<td>`+listeEquipements[i].dateAchat+`</td>
		<td>`+listeEquipements[i].garantie+`</td>
		<td>`+listeEquipements[i].fournisseur+`</td>
		<td>`+listeEquipements[i].utilisateur+`</td>`
		;
	}
	tableauAuto+='</tbody></table>'
	document.getElementById(element).innerHTML=tableauAuto;
};

function GenerateTableauIncident(listeIncidents,element){
	var tableauAuto;
	tableauAuto=`<form method="POST"><input type="hidden" name ="iid" id="iid"><div class="table-responsive"><table class="table table-striped" id="`+element+`"><thead>
	<th scope="col">Objet</th>
	<th scope="col">Date de la Prise en charge</th>
	<th scope="col">Date d'intervention</th>
	<th scope="col">Duree de l'intervention</th>
	<th scope="col">Nom du PC</th>
	<th scope="col">Nom du technicien</th>
	<th scope="col">Niveau</th>
	<th scope="col">Solution</th>
	<th scope="col">Statut</th>`;
	if (element == 'tabincident'){
		tableauAuto+=`<th scope="col">Modifier</th></tr></thead><tbody>`;
	}
	else{
		tableauAuto+=`</tr></thead><tbody>`;
	}
	for(i=0; i<listeIncidents.length; i++) {
		tableauAuto+=`<input type="hidden" name="id`+i+`" id="id`+i+`" value="`+listeIncidents[i].id+`"><tr id="ligne`+i+`">
		<td id="obj`+i+`">`+listeIncidents[i].objet+`</td>
		<td id="datePriseCharge`+i+`">`+listeIncidents[i].datePriseCharge+`</td>
		<td id="dateIntervention`+i+`">`+listeIncidents[i].dateIntervention+`</td>
		<td id="duree`+i+`">`+listeIncidents[i].duree+`</td>
		<td id="nomPC`+i+`">`+listeIncidents[i].nompc+`</td>
		<td id="name`+i+`">`+listeIncidents[i].nom+`</td>
		<td id="id_Niveau`+i+`">`+listeIncidents[i].id_Niveau+`</td>
		<td id="solution`+i+`">`+listeIncidents[i].solution+`</td>
		<td id="libellest`+i+`">`+listeIncidents[i].libellest+`</td>`;
		if (element == 'tabincident'){
			tableauAuto+=`<td><a href="#" onclick="edit(`+i+`)"><img src="./img/edit.png" alt="edit"></a></td></tr>`;
		}
		else{
			tableauAuto+=`</tr>`;
		}
		
	}
	tableauAuto+='</tbody></table></form>'
	document.getElementById(element).innerHTML=tableauAuto;
};

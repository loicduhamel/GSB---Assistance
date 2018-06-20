function loadDataToSetEquipement(){
	loadDataFournisseur();
	loadDataProcesseur();
	loadDataVisiteur();
	loadDataUtilisateur();
	loadDataMarque();
	loadDataMemoire();
	loadDataDisqueDur();
}

function loadDataFournisseur(dataFournisseur){

	$.ajax({
		url: './Module/RecupDataToSetEquipement/RecupFournisseurs.php',
		type: 'GET',
		data: {
			'dataFournisseur':dataFournisseur,
		},
		success: function(data) {

			var listeFournisseurs=JSON.parse(data);
			GenerateOption(listeFournisseurs,"fournisseur");
		}
	});
}

function loadDataProcesseur(dataProcesseur){

	$.ajax({
		url: './Module/RecupDataToSetEquipement/RecupProcesseur.php',
		type: 'GET',
		data: {
			'dataProcesseur':dataProcesseur,
		},
		success: function(data) {

			var listeProcesseurs=JSON.parse(data);
			GenerateOption(listeProcesseurs,"processeur");
		}
	});
}

function loadDataVisiteur(dataVisiteur){

	$.ajax({
		url: './Module/RecupDataToSetEquipement/RecupVisiteur.php',
		type: 'GET',
		data: {
			'dataVisiteur':dataVisiteur,
		},
		success: function(data) {

			var listevisiteurs=JSON.parse(data);
			GenerateOption(listevisiteurs,"visiteur");
			GenerateOptionwMail(listevisiteurs,"demandeur");
			GenerateStat(listevisiteurs,'vis');
		}
	});
}

function loadDataUtilisateur(dataUtilisateur){

	$.ajax({
		url: './Module/RecupDataToSetEquipement/RecupUtilisateur.php',
		type: 'GET',
		data: {
			'dataUtilisateur':dataUtilisateur,
		},
		success: function(data) {

			var listeutilisateurs=JSON.parse(data);
			GenerateOption(listeutilisateurs,"visiteurdel");
		}
	});
}

function loadDataMarque(dataMarque){

	$.ajax({
		url: './Module/RecupDataToSetEquipement/RecupMarque.php',
		type: 'GET',
		data: {
			'dataMarque':dataMarque,
		},
		success: function(data) {

			var listeMarques=JSON.parse(data);
			GenerateOption(listeMarques,"marque");
		}
	});
}

function loadDataMemoire(dataMemoire){

	$.ajax({
		url: './Module/RecupDataToSetEquipement/RecupMemoire.php',
		type: 'GET',
		data: {
			'dataMemoire':dataMemoire,
		},
		success: function(data) {

			var listeMemoires=JSON.parse(data);
			GenerateOption(listeMemoires,"memoire");
		}
	});
};

function loadDataDisqueDur(dataDisqueDur){

	$.ajax({
		url: './Module/RecupDataToSetEquipement/RecupDisqueDur.php',
		type: 'GET',
		data: {
			'dataDisqueDur':dataDisqueDur,
		},
		success: function(data) {

			var listeDisquesDur=JSON.parse(data);
			GenerateOption(listeDisquesDur,"disquedur");
		}
	});
};

function GenerateOption(data,id){
	var option="";

	for(i=0; i<data.length; i++) {
		option += `<option value ='`+data[i]['id']+`'>` + data[i]['libelle'] +`</option>` ;
	}
	document.getElementById(id).innerHTML=option;
};

function GenerateOptionwMail(data,id){
	var option="";
	var inputMail="";
	for(i=0; i<data.length; i++) {
		option += "<option value ='"+data[i]['id']+"'>" + data[i]['libelle'] +"</option>";
		inputMail +="<input type='hidden' name='"+data[i]['id']+"' value = '"+data[i]['mail']+"'>";
	}
	document.getElementById(id).innerHTML=option;
	document.getElementById("getmail").innerHTML=inputMail;
};


function GenerateStat(data,element){
	var option="";
	for(i=0; i<data.length; i++) {
		option += `<td scope="col">`+ data[i].nbr + `</td>`;
	}
	document.getElementById(element).innerHTML=option;
};
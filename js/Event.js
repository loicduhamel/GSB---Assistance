document.addEventListener('DOMContentLoaded',function(event){
	var comp = document.querySelector("#typeComp");
	comp.addEventListener('change', function(event){
		if(comp.value == "processeur"){
			document.getElementById('capacite').style.visibility = 'hidden';
			document.getElementById('type').style.visibility = 'hidden';
			document.getElementById('capaciteinput').required = false;
			document.getElementById('typeinput').required = false;
		}
		if(comp.value == "disquedur"){
			document.getElementById('capacite').style.visibility = 'visible';
			document.getElementById('type').style.visibility = 'visible';
			document.getElementById('labeltype').innerHTML = "Type de disque dur";
			document.getElementById('capaciteinput').required = true;
			document.getElementById('typeinput').required = true;
		}
		if(comp.value == "marque"){
			document.getElementById('capacite').style.visibility = 'hidden';
			document.getElementById('type').style.visibility = 'hidden';
			document.getElementById('capaciteinput').required = false;
			document.getElementById('typeinput').required = false;
		}
		if(comp.value == "memoire"){
			document.getElementById('capacite').style.visibility = 'visible';
			document.getElementById('type').style.visibility = 'visible';
			document.getElementById('labeltype').innerHTML = "Type de de mémoire";
			document.getElementById('capaciteinput').required = true;
			document.getElementById('typeinput').required = true;

		}
	});
	var niveau = document.querySelector("#niveau");
	niveau.addEventListener("change",function(event){
		if(niveau.value == 1){
			document.querySelector("#divtechnicien").style.visibility = "hidden";
			document.querySelector("#technicien").required = false;
		}
		else{
			document.querySelector("#divtechnicien").style.visibility = "visible";
			document.querySelector("#technicien").required = true;
		}
	});
	var prenom = document.querySelector("#prenomvisiteur");
	var nom = document.querySelector("#nomvisiteur");
	prenom.addEventListener("input", function(event){
		document.getElementById("user").textContent=prenom.value + "." + nom.value;
	});
	nom.addEventListener("input", function(event){
		document.getElementById("user").textContent=prenom.value + "." + nom.value;
	});
});

function edit(i){
	var id = document.querySelector('#id'+i).innerHTML;
	var objet = document.querySelector('#obj'+i).innerHTML;
	var datePriseCharge = document.querySelector('#datePriseCharge'+i).innerHTML;
	var dateIntervention = document.querySelector('#dateIntervention'+i).innerHTML;
	var duree = document.querySelector('#duree'+i).innerHTML;
	var nomPC = document.querySelector('#nomPC'+i).innerHTML;
	var name = document.querySelector('#name'+i).innerHTML;
	var id_Niveau = document.querySelector('#id_Niveau'+i).innerHTML;
	var solution = document.querySelector('#solution'+i).innerHTML;
	var libellest = document.querySelector('#libellest'+i).innerHTML;
	tableauEdit = `<tr id="ligne`+i+`">
	<td id="obj`+i+`">`+objet+`</td>
	<td id="datePriseCharge`+i+`">`+datePriseCharge+`</td>
	<td id="dateIntervention`+i+`"><input class="form-control" type="date" name = "dateIntervention`+i+`" value = "`+ dateIntervention +`"></td>
	<td id="duree`+i+`"><input class="form-control" type="time" name = "duree`+i+`" value = "`+ duree +`"></td>
	<td id="nomPC`+i+`">`+nomPC+`</td>
	<td id="name`+i+`">`+name+`</td>
	<td id="id_Niveau`+i+`">`+id_Niveau+`</td>
	<td id="solution`+i+`"><input class="form-control" size="70" type="text" name = "solution`+i+`" value = "`+ solution +`"></td>
	<td id="libellest`+i+`"><select class="form-control" id="libellest`+i+`" name = "libellest`+i+`">
	<option value="1">En attente de traitement</option>
	<option value="2">En cours</option>
	<option value="3">Terminé</option></select></td>
	<td><button type="submit" name="validupdt" id="validupdt" onclick="seti(`+i+`)"><img class="small-icon" src="./img/valid.png" alt="valider"></button><input type="image" name="closeupdt" class="small-icon" src="./img/cancel.png" alt="fermer"></td></tr>`;
	document.querySelector('#ligne'+i).innerHTML=tableauEdit;
}

function seti(i){
	document.querySelector('#iid').value=i;
	alert(document.querySelector('#iid').value);
}
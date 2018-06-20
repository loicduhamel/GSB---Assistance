<!-- Affichage Equipements -->

<div class="modal fade " id="equipment" tabindex="-1" role="dialog" aria-labelledby="equipment" aria-hidden="true">
	<div class="modal-dialog modal-grand " role="document">
		<div class="modal-content bigModal">
		<div class="modal-header">
			<h3 class="modal-title" style="margin-left:40%;">Liste des équipements</h3>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="table-responsive" id="tabequipement">
			</div>
		</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>

<!-- Affichage Incidents -->

<div class="modal fade" id="listincident" tabindex="-1" role="dialog" aria-labelledby="listincident" aria-hidden="true">
	<div class="modal-dialog modal-grand " role="document">
		<div class="modal-content bigModal">
		<div class="modal-header">
			<h3 class="modal-title" style="margin-left:40%;">Liste des incidents</h3>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="table-responsive" id="tabincident">
			</div>
		</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>

<!-- Insérer un nouvel équipement -->

<div class="modal fade" id="addequip" tabindex="-1" role="dialog" aria-labelledby="addequip" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h3 class="modal-title" style="margin-left:30%;">Ajouter un équipement</h3>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
			<div class="modal-body">
			<form method="post">
				<div class="form-group row">
					<label class="col-2 col-form-label">Nom du PC</label>
					<div class="col-9">
						<input class="form-control" type="text" name="nompc" required="true">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-2 col-form-label">Type</label>
					<div class="col-9">
						<select class="form-control" name="typeEquipement" required="true"><option>Portable</option><option>Fixe</option></select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-2 col-form-label">Processeur</label>
					<div class="col-9">
						<select class="form-control" name="processeur" id="processeur" required="true"></select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-2 col-form-label">Disque dur</label>
					<div class="col-9">
						<select class="form-control" name="disquedur" id="disquedur" required="true"></select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-2 col-form-label">Mémoire RAM</label>
					<div class="col-9">
						<select class="form-control" name="memoire" id="memoire" required="true"></select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-2 col-form-label">Marque</label>
					<div class="col-9">
						<select class="form-control" name="marque" id="marque" required="true"></select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-2 col-form-label">Date d'achat</label>
					<div class="col-9">
						<input class="form-control" type="date" name="dateAchat" required="true">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-2 col-form-label">Date de garantie</label>
					<div class="col-9">
						<input class="form-control" type="date" name="garantie" required="true">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-2 col-form-label">Fournisseur</label>
					<div class="col-9">
						<select class="form-control" name="fournisseur" id="fournisseur" required="true"></select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-2 col-form-label">Nom du visiteur</label>
					<div class="col-9">
						<select class="form-control" name="visiteur" id="visiteur" required="true"></select>
					</div>
				</div>
			</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" name="ValidEquip">Valider</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- Insérer un nouveau composant -->

<div class="modal fade" id="addcomp" tabindex="-1" role="dialog" aria-labelledby="addcomp" aria-hidden="true">
	<div class="modal-dialog modal-lg " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" style="margin-left:30%;">Ajouter un équipement</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form method="post">
					<div class="form-group row">
						<label class="col-2 col-form-label">Type de composant</label>
						<div class="col-9">
							<select class="form-control" name="typeComp" id="typeComp" required="true">
								<option value="disquedur">Disque dur</option>
								<option value="marque">Marque</option>
								<option value="memoire">Barette mémoire</option>
								<option value="processeur">Processeur</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-2 col-form-label">Nom</label>
						<div class="col-9">
							<input type="text" class="form-control" name="nom" id="nom" required="true">
						</div>
					</div>
					<div class="form-group row" id="capacite">
						<label class="col-2 col-form-label">Capacité (en GO)</label>
						<div class="col-9">
							<input type="text" class="form-control" name="capacite"  required="true" id="capaciteinput">
						</div>
					</div>
					<div class="form-group row" id="type">
						<label class="col-2 col-form-label" id="labeltype">Type de disque dur</label>
						<div class="col-9">
							<input type="text" class="form-control" name="type"  required="true" id="typeinput">
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" name="ValidComp">Valider</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Insérer un nouveau visiteur -->

<div class="modal fade" id="addVisiteur" tabindex="-1" role="dialog" aria-labelledby="addVisiteur" aria-hidden="true">
	<div class="modal-dialog modal-lg " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" style="margin-left:30%;">Ajouter un visiteur</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form method="post">
					<div class="form-group row">
						<label class="col-2 col-form-label">Nom</label>
						<div class="col-9">
							<input type="text" class="form-control" name="nomvisiteur" id="nomvisiteur" required="true">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-2 col-form-label">Prénom</label>
						<div class="col-9">
							<input type="text" class="form-control" name="prenomvisiteur" id="prenomvisiteur" required="true">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-2 col-form-label">Adresse Email</label>
						<div class="col-9">
							<input type="email" class="form-control" name="mail" required="true">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-2 col-form-label">Nom d'utilisateur</label>
						<div class="col-9" id="user">
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-2 col-form-label">Mot de passe</label>
						<div class="col-9">
							<input type="password" class="form-control" name="password"
						 required="true">
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" name="ValidaddVisiteur">Valider</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Supprimer un visiteur -->

<div class="modal fade" id="delvisiteur" tabindex="-1" role="dialog" aria-labelledby="delvisiteur" aria-hidden="true">
	<div class="modal-dialog modal-lg " role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h3 class="modal-title" style="margin-left:30%;">Supprimer un visiteur</h3>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
			<div class="modal-body">
			<form method="post">
				<div class="form-group row">
					<label class="col-2 col-form-label">Nom du visiteur</label>
					<div class="col-9">
						<select class="form-control" name="visiteurdel" id="visiteurdel" required="true"></select>
					</div>
				</div>
			</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary" name="ValiddelVisiteur">Valider</button>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>

<!-- Ajouter un nouveau ticket -->

<div class="modal fade" id="addincident" tabindex="-1" role="dialog" aria-labelledby="addincident" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" style="margin-left:30%;">Ajouter un ticket d'incident</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form method="post">
					<div class="form-group row">
						<label class="col-2 col-form-label">Objet</label>
						<div class="col-9">
							<input type="text" class="form-control" name="objet" required="true">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-2 col-form-label">Nom du PC</label>
						<div class="col-9">
							<select class="form-control" id="nompcinc" name="nompcinc" required="true"></select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-2 col-form-label">Niveau</label>
						<div class="col-9">
							<select class="form-control" id="niveau" name="niveau" required="true"></select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-2 col-form-label">Nom du demandeur</label>
						<div class="col-9">
							<select class="form-control" id="demandeur" name="demandeur" required="true"></select>
						</div>
					</div>
					<div class="form-group row hidden" id="divtechnicien">
						<label class="col-2 col-form-label">Technicien</label>
						<div class="col-9">
							<select class="form-control" id="technicien" name="technicien" required="true"></select>
						</div>
					</div>
					<div id="getmail">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" name="ValidIncident">Valider</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- Afficher Statistiques-->

<div class="modal fade" id="addstat" tabindex="-1" role="dialog" aria-labelledby="addstat" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" style="margin-left:30%;">Ajouter un ticket d'incident</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">Nombre de Techniciens</th>
								<th scope="col">Nombre de visiteur</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td id="tec"></td>
								<td id="vis"></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Tickets en attente de traitement</th>
								<th>Tickets en cours de traitement</th>
								<th>Tickets terminés</th>
							</tr>
						</thead>
						<tbody>
							<tr id="statrow">
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Déconnexion-->

<div class="modal fade" id="deconnexion" tabindex="-1" role="dialog" aria-labelledby="deconnexion" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" style="margin-left:30%;">Déconnexion</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="post">
			<div class="modal-body">
					<div class="form-group">
						<p>Voulez-vous vraiment vous déconnecter ?</p>
					</div>
			</div>
			<div class="modal-footer">
				<button type="submit" name="deconnexionbutton" class="btn btn-primary">Oui</button>
			</div>
			</form>
		</div>
	</div>
</div>
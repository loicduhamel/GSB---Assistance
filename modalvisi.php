<!-- Affichage Equipements -->

<div class="modal fade " id="equipmentvisi" tabindex="-1" role="dialog" aria-labelledby="equipmentvisi" aria-hidden="true">
	<div class="modal-dialog modal-grand " role="document">
		<div class="modal-content bigModal">
		<div class="modal-header">
			<h3 class="modal-title" style="margin-left:40%;">Liste des équipements</h3>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="table-responsive" id="tabequipementvisi">
			</div>
		</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>

<!-- Affichage Incidents -->

<div class="modal fade" id="listincidentvisi" tabindex="-1" role="dialog" aria-labelledby="listincidentvisi" aria-hidden="true">
	<div class="modal-dialog modal-grand " role="document">
		<div class="modal-content bigModal">
		<div class="modal-header">
			<h3 class="modal-title" style="margin-left:40%;">Liste des incidents</h3>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<div class="table-responsive" id="tabincidentvisi">
			</div>
		</div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>

<!-- Déconnexion-->

<div class="modal fade" id="deconnexionvisi" tabindex="-1" role="dialog" aria-labelledby="deconnexionvisi" aria-hidden="true">
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
				<button type="submit" name="deconnexionbuttonvisi" class="btn btn-primary">Oui</button>
			</div>
			</form>
		</div>
	</div>
</div>
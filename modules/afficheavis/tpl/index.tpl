{literal}
<script>
//demande confirmation sur click d'un bouton supprimer
$(function() {
	//sur click d'un bouton de suppression
	$('a.glyphicon-remove').click(function(ev){
		//récupérer le href du lien
		//et l'utiliser pour le bouton de confirmation
		$('#go').attr("href",$(this).attr('href'))	

		//afficher la boite de dialogue
		$('#myModal').modal();
	
		//supprimer le comportement par défaut du lien d'origine
		ev.preventDefault();				
	})


//efface les données de la boite de dialogue après affichage
	$('body').on('hidden.bs.modal', '.modal', function () {
    	$(this).removeData('bs.modal');
    });	
	
	
});
</script>
{/literal}

<h2>Liste des avis du programme</h2>

<h3>Liste</h3>
	<table class='table table-striped'>
		<thead>
			<th>Pseudo</th><th>Note</th><th>Avis</th><th>Actions</th>
		</thead>
		<tbody>

		{foreach $data as $ligne=>$donnees}

			<tr class='table-striped'>
				<td>{$donnees.Id_Internaute}</td>
				<td>{$donnees.Note}</td>
				<td>{$donnees.Avis}</td>
				<td>
					<!--voir le détail-->
					<a class='glyphicon glyphicon-search' 
						data-toggle="modal" 
						data-target="#inclusionModal" 
						href='?module=GestionProgramme&action=detail&id={$donnees.id}&ref={$donnees.Nom_Programme}&displayModuleInDialog=1'>
					</a> 				

					<!--modifier-->
					{if ($this->session->user->Id_Internaute == $donnees.Id_Internaute)}
					<a class='glyphicon glyphicon-pencil' 
						data-toggle="modal" 
						data-target="#inclusionModal"
						href='?module=afficheavis&action=modifier&id1={$donnees.Id_internaute}&id2={$donnees.Id_Programme}&displayModuleInDialog=1'>
					</a>

					<!--supprimer-->
					<a class='glyphicon glyphicon-remove' title='{$donnees.Nom_Programme}' 
						href='?module=afficheavis&action=supprimer&id1={$donnees.Id_Internaute}&id2={$donnees.Id_Programme}'></a>
					{/if}				
				</td>
			</tr>
		{foreachelse}	
			<tr><td colspan='3'>Aucune donnée</td></tr>
		{/foreach}
		</tbody>
	</table>
	
	
	
	
	
	
<!-- boite de dialogue confirmation -->
<!-- exemple du site getbootstrap -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
      </div>
      <div class="modal-body">
        Êtes vous sûr de vouloir supprimer l'enregistrement ? 
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-default" data-dismiss="modal">Fermer</a>
        <a href="#" class="btn btn-primary" id='go'>Confirmer</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	
	
<!-- boite de dialogue inclusion-->
<div class="modal fade" id="inclusionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	    Veuillez patientez...
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<div class='avis'>
<h2>Liste des avis du programme</h2>

<h3>Liste</h3>
	<table class='table table-striped'>
		<thead>
			<th>Pseudo</th><th>Note</th><th>Avis</th><th>Actions</th>
		</thead>
		<tbody>

		{foreach $avis as $ligne=>$donnees}

			<tr class='table-striped'>
			<td>{foreach InternauteManager::chercherParId($donnees.Id_Internaute) as $l=>$d}
				{$d.Pseudo_internaute}
				{/foreach}</td>
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
</div>

<div class="alert alert-info"><h2>Aperçu de {$reference}</h2></div>

<div class='jumbotron'>
	<p>
	{foreach $detail as $ligne=>$donnees}
	{$donnees.Nom_Programme}
	{/foreach}
		bonjour
	</p>
	<!-- <table class='table table-striped'>
		<thead>
			<th>Nom du Programme</th><th>Description</th><th>Pegi</th><th>Inedit</th><th>Saison</th><th>Episode</th><th>Durée</th><th>Moyenne attribué</th><th>Genre</th><th>Type</th>
		</thead>
		<tbody>
			<tr class='table-striped'>
				<td>{$detail.Nom_Programme}</td>
				<td>{$detail.Description}</td>
				<td>{$detail.Pegi}</td>
				{if ($detail.Inedit == 1)}
						<td>Oui</td>
				{else}
						<td>Non</td>
				{/if}
				<td>{$detail.Saison}</td>
				<td>{$detail.Episode}</td>
				<td>{$detail.Duree}</td>
				<td>{$detail.Moyenne}</td>
				<td>{$genre.Nom_Genre}</td>
				<td>{$type.Nom_Type}</td>
			</tr>
		</tbody>
	</table> -->
	
	
	<a href="?module=Programmes&action=supprimer&id={$donnees.id}&ref={$donnees.Nom_Programme}" class='btn btn-danger'>Supprimer</a>
	<a href="?module=Programmes&action=modifier&id={$donnees.id}&ref={$donnees.Nom_Programme}" class='btn btn-default'>Modifier</a>
</div>
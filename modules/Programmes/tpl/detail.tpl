
<div class="alert alert-info"><h2>Aperçu de {$reference}</h2></div>

<div class='jumbotron'>
	<p class="description">
		{$detail->Description}		
	</p>
	<p>
		{if ($detail->Pegi == 0)}
			Déja diffusé
		{else}
			Inedit
		{/if}
	</p>
	
	<a href="?module=Programmes&action=supprimer&id={$id}&ref={$reference}" class='btn btn-danger'>Supprimer</a>
	<a href="?module=Programmes&action=modifier&id={$id}&ref={$reference}" class='btn btn-default'>Modifier</a>
</div>
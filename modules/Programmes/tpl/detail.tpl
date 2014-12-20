
<div class="alert alert-info"><h2>Aperçu de {$reference}</h2></div>

<div class='jumbotron'>
	
	{foreach $detail as $l=>$d}
		<img src="images/Image Programmes/{$d->ImageProgramme}" />
	{/foreach}
	<a href="?module=Programmes&action=supprimer&id={$id}&ref={$reference}" class='btn btn-danger'>Supprimer</a>
	<a href="?module=Programmes&action=modifier&id={$id}&ref={$reference}" class='btn btn-default'>Modifier</a>
</div>
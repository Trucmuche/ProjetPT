

{$ref}

{foreach $avis as $ligne=>$donnees}
	{$internaute=InternauteManager::chercherParID($donnees.Id_Internaute)}
	{$donnees.Note}
	{$donnees.Avis}
	{$internaute.Nom_Internaute}
<div class='avis'>
	{$form}	
</div>
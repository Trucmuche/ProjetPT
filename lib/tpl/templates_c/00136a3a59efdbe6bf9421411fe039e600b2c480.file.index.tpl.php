<?php /* Smarty version Smarty-3.1.1, created on 2014-12-20 16:37:57
         compiled from "modules\Programmes\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9996547f2cb85627c2-18767493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00136a3a59efdbe6bf9421411fe039e600b2c480' => 
    array (
      0 => 'modules\\Programmes\\tpl\\index.tpl',
      1 => 1419089864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9996547f2cb85627c2-18767493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_547f2cb88a679',
  'variables' => 
  array (
    'data' => 0,
    'donnees' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547f2cb88a679')) {function content_547f2cb88a679($_smarty_tpl) {?>
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


<p class="text-left">
		<a href='?module=Programmes&action=search&displayModuleInDialog=1' 
		data-toggle="modal" 
		data-target="#inclusionModal"
		class='btn btn-success glyphicon glyphicon-plus'> Rechercher un programme</a>
</p>
	
<h2>Liste des programmes</h2>
	<p class="text-right">
		<a href='?module=Programmes&action=ajouter&displayModuleInDialog=1' 
		data-toggle="modal" 
		data-target="#inclusionModal"
		class='btn btn-success glyphicon glyphicon-plus'> Ajouter</a>
	</p>
<h3>Liste</h3>
	<table class='table table-striped'>
		<thead>
			<th>Nom du Programme</th><th>Durée</th><th>Moyenne attribué</th><th>Description</th><th>Actions</th>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['donnees'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['donnees']->_loop = false;
 $_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['donnees']->key => $_smarty_tpl->tpl_vars['donnees']->value){
$_smarty_tpl->tpl_vars['donnees']->_loop = true;
 $_smarty_tpl->tpl_vars['ligne']->value = $_smarty_tpl->tpl_vars['donnees']->key;
?>
			<?php if ($_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme']!=null){?>
			<tr class='table-striped'>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['Duree'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['Moyenne'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['Description'];?>
</td>
				<td>
					<!--voir le détail-->
					<a class='glyphicon glyphicon-search' 
						data-toggle="modal" 
						data-target="#inclusionModal" 
						href='?module=Programmes&action=detail&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Id_Programme'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme'];?>
&displayModuleInDialog=1'>
					</a> 				

					<!--modifier-->
					<a class='glyphicon glyphicon-pencil' 
						data-toggle="modal" 
						data-target="#inclusionModal"
						href='?module=Programmes&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Id_Programme'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme'];?>
&displayModuleInDialog=1'>
					</a>

					<!--supprimer-->
					<a class='glyphicon glyphicon-remove' title='<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme'];?>
' 
						href='?module=Programmes&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Id_Programme'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme'];?>
'></a>
					
					<!--avis-->
					<a class='glyphicon glyphicon-heart-empty' title='<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme'];?>
' 
						href='?module=afficheavis&action=afficher&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Id_Programme'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme'];?>
'></a>
				</td>
			</tr>
			<?php }else{ ?>	
			<tr><td colspan='3'>Aucune donnée</td></tr>
			<?php }?>
		<?php } ?>
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
    <div class="modal-content" position="center">
		<img src="images/loading.gif" />
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><?php }} ?>
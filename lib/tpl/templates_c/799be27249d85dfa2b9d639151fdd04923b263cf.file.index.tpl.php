<?php /* Smarty version Smarty-3.1.1, created on 2014-11-22 01:30:06
         compiled from "modules\GestionProgramme\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26579546c4f6f4c96b6-12479896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '799be27249d85dfa2b9d639151fdd04923b263cf' => 
    array (
      0 => 'modules\\GestionProgramme\\tpl\\index.tpl',
      1 => 1416615919,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26579546c4f6f4c96b6-12479896',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_546c4f6f89df1',
  'variables' => 
  array (
    'data' => 0,
    'donnees' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546c4f6f89df1')) {function content_546c4f6f89df1($_smarty_tpl) {?>
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


<h2>liste des produits et actions</h2>
	<p class="text-right">
		<a href='?module=GestionProgramme&action=ajouter&displayModuleInDialog=1' class='btn btn-success glyphicon glyphicon-plus'> Ajouter</a>
	</p>
<h3>Liste</h3>
	<table class='table table-striped'>
		<thead>
			<th>Nom du Programme</th><th>Durée</th><th>Moyenne attribué</th><th>Actions</th>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['donnees'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['donnees']->_loop = false;
 $_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['donnees']->key => $_smarty_tpl->tpl_vars['donnees']->value){
$_smarty_tpl->tpl_vars['donnees']->_loop = true;
 $_smarty_tpl->tpl_vars['ligne']->value = $_smarty_tpl->tpl_vars['donnees']->key;
?>
			<tr class='table-striped'>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['Duree'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['Moyenne'];?>
</td>
				<td>
					<!--voir le détail-->
					<a class='glyphicon glyphicon-search' 
						data-toggle="modal" 
						data-target="#inclusionModal" 
						href='?module=GestionProgramme&action=detail&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['id'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Reference'];?>
&displayModuleInDialog=1'>
					</a> 				

					<!--modifier-->
					<a class='glyphicon glyphicon-pencil' 
						data-toggle="modal" 
						data-target="#inclusionModal"
						href='?module=CRUD&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['id'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Reference'];?>
&displayModuleInDialog=1'>
					</a>

					<!--supprimer-->
					<a class='glyphicon glyphicon-remove' title='<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Reference'];?>
' 
						href='?module=CRUD&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['id'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Reference'];?>
'></a>				
				</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['donnees']->_loop) {
?>	
			<tr><td colspan='3'>Aucune donnée</td></tr>
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
    <div class="modal-content">
	    Contenu vide remplacé par le module...
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.1, created on 2014-12-20 18:07:23
         compiled from "modules\afficheavis\tpl\afficher.tpl" */ ?>
<?php /*%%SmartyHeaderCode:653754909be8974f35-45573269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '515be5612b57f88dc542b0cb3972e44b50f6b663' => 
    array (
      0 => 'modules\\afficheavis\\tpl\\afficher.tpl',
      1 => 1419095235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '653754909be8974f35-45573269',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_54909be8a6fba',
  'variables' => 
  array (
    'avis' => 0,
    'donnees' => 0,
    'd' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54909be8a6fba')) {function content_54909be8a6fba($_smarty_tpl) {?><div class='avis'>
<h2>Liste des avis du programme</h2>

<h3>Liste</h3>
	<table class='table table-striped'>
		<thead>
			<th>Pseudo</th><th>Note</th><th>Avis</th><th>Actions</th>
		</thead>
		<tbody>

		<?php  $_smarty_tpl->tpl_vars['donnees'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['donnees']->_loop = false;
 $_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['avis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['donnees']->key => $_smarty_tpl->tpl_vars['donnees']->value){
$_smarty_tpl->tpl_vars['donnees']->_loop = true;
 $_smarty_tpl->tpl_vars['ligne']->value = $_smarty_tpl->tpl_vars['donnees']->key;
?>

			<tr class='table-striped'>
			<td><?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable;
 $_from = InternauteManager::chercherParId($_smarty_tpl->tpl_vars['donnees']->value['Id_Internaute']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
 $_smarty_tpl->tpl_vars['l']->value = $_smarty_tpl->tpl_vars['d']->key;
?>
				<?php echo $_smarty_tpl->tpl_vars['d']->value['Pseudo_internaute'];?>

				<?php } ?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['Note'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['Avis'];?>
</td>
				<td>
					<!--voir le détail-->
					<a class='glyphicon glyphicon-search' 
						data-toggle="modal" 
						data-target="#inclusionModal" 
						href='?module=GestionProgramme&action=detail&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['id'];?>
&ref=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme'];?>
&displayModuleInDialog=1'>
					</a> 				

					<!--modifier-->
					<?php if (($_smarty_tpl->tpl_vars['this']->value->session->user->Id_Internaute==$_smarty_tpl->tpl_vars['donnees']->value['Id_Internaute'])){?>
					<a class='glyphicon glyphicon-pencil' 
						data-toggle="modal" 
						data-target="#inclusionModal"
						href='?module=afficheavis&action=modifier&id1=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Id_internaute'];?>
&id2=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Id_Programme'];?>
&displayModuleInDialog=1'>
					</a>

					<!--supprimer-->
					<a class='glyphicon glyphicon-remove' title='<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Nom_Programme'];?>
' 
						href='?module=afficheavis&action=supprimer&id1=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Id_Internaute'];?>
&id2=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['Id_Programme'];?>
'></a>
					<?php }?>				
				</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['donnees']->_loop) {
?>	
			<tr><td colspan='3'>Aucune donnée</td></tr>
		<?php } ?>
		</tbody>
</div><?php }} ?>